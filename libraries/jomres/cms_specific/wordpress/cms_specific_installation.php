
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
i
s
 
c
u
r
r
e
n
t
l
y
 
a
v
a
i
l
a
b
l
e
 
f
o
r
 
u
s
e
 
i
n
 
a
l
l
 
p
e
r
s
o
n
a
l
 
o
r
 
c
o
m
m
e
r
c
i
a
l
 
p
r
o
j
e
c
t
s
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
D
i
r
e
c
t
 
A
c
c
e
s
s
 
t
o
 
t
h
i
s
 
f
i
l
e
 
i
s
 
n
o
t
 
a
l
l
o
w
e
d
.
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


/
/
 
D
o
n
'
t
 
n
e
e
d
 
t
o
 
r
u
n
 
t
h
i
s
 
a
g
a
i
n
 
i
f
 
t
h
e
 
t
a
b
l
e
'
s
 
a
l
r
e
a
d
y
 
p
o
p
u
l
a
t
e
d

$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
u
s
e
r
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s
 
L
I
M
I
T
 
2
'
;

$
e
x
i
s
t
i
n
g
_
u
s
e
r
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

i
f
 
(
!
e
m
p
t
y
(
$
e
x
i
s
t
i
n
g
_
u
s
e
r
s
)
)
 
{

 
 
 
 
r
e
t
u
r
n
;

}


$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
i
d
,
u
s
e
r
_
l
o
g
i
n
 
F
R
O
M
 
#
_
_
u
s
e
r
s
'
;

$
u
s
e
r
_
i
d
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


i
f
 
(
!
e
m
p
t
y
(
$
u
s
e
r
_
i
d
s
)
)
 
{

 
 
 
 
$
s
u
p
e
r
_
a
d
m
i
n
_
i
d
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
f
o
r
e
a
c
h
 
(
$
u
s
e
r
_
i
d
s
 
a
s
 
$
u
s
e
r
)
 
{

 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
$
u
s
e
r
-
>
i
d
.
"
<
b
r
 
/
>
"
;

 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
s
u
p
e
r
_
a
d
m
i
n
(
$
u
s
e
r
-
>
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
e
r
_
a
d
m
i
n
_
i
d
s
[
]
 
=
 
a
r
r
a
y
(
'
u
s
e
r
n
a
m
e
'
 
=
>
 
$
u
s
e
r
-
>
u
s
e
r
_
l
o
g
i
n
,
 
'
i
d
'
 
=
>
 
$
u
s
e
r
-
>
i
d
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
s
u
p
e
r
_
a
d
m
i
n
_
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
u
p
e
r
_
a
d
m
i
n
_
i
d
s
 
a
s
 
$
a
d
m
i
n
_
u
s
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
_
m
a
n
a
g
e
r
s

	
	
	
	
(
`
u
s
e
r
i
d
`
,
`
a
c
c
e
s
s
_
l
e
v
e
l
`
,
`
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
`
)

	
	
	
V
A
L
U
E
S

	
	
	
	
(
"
.
$
a
d
m
i
n
_
u
s
e
r
[
 
'
i
d
'
 
]
.
"
,
9
0
,
1
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

