
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
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
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


c
l
a
s
s
 
j
1
6
0
0
0
d
a
t
a
b
a
s
e
_
i
n
t
e
g
r
i
t
y
_
c
h
e
c
k

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

	
	

	
	
$
j
o
m
r
e
s
_
v
e
r
s
i
o
n
 
=
 
'
<
p
>
J
o
m
r
e
s
 
f
i
l
e
s
 
v
e
r
s
i
o
n
:
 
'
.
$
j
r
C
o
n
f
i
g
[
'
v
e
r
s
i
o
n
'
]
.
'
<
/
p
>
'
;

	
	
$
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
 
=
 
'
<
p
>
J
o
m
r
e
s
 
d
a
t
a
b
a
s
e
 
v
e
r
s
i
o
n
:
 
'
.
$
j
r
C
o
n
f
i
g
[
'
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
'
]
.
'
<
/
p
>
'
;

	
	

	
	
i
f
 
(
$
j
r
C
o
n
f
i
g
[
'
v
e
r
s
i
o
n
'
]
 
>
 
$
j
r
C
o
n
f
i
g
[
'
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
'
]
)
 
{

	
	
	
e
c
h
o
 
'

<
d
i
v
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
w
a
r
n
i
n
g
"
>

	
<
h
3
>
W
A
R
N
I
N
G
:
 
J
o
m
r
e
s
 
d
a
t
a
b
a
s
e
 
t
a
b
l
e
s
 
a
r
e
 
n
o
t
 
u
p
 
t
o
 
d
a
t
e
.
<
/
h
3
>
'

	
.
$
j
o
m
r
e
s
_
v
e
r
s
i
o
n
.
$
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
.

	
'
<
p
>
B
e
f
o
r
e
 
a
t
t
e
m
p
t
i
n
g
 
t
o
 
s
o
l
v
e
 
t
h
i
s
 
p
r
o
b
l
e
m
,
 
p
l
e
a
s
e
 
m
a
k
e
 
a
 
f
u
l
l
 
s
i
t
e
 
b
a
c
k
u
p
,
 
t
h
e
n
 
c
l
i
c
k
 
t
h
e
 
b
u
t
t
o
n
 
b
e
l
o
w
.
<
/
p
>

	
<
a
 
h
r
e
f
=
"
'
.
j
o
m
r
e
s
U
r
l
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
.
'
&
t
a
s
k
=
j
o
m
r
e
s
_
i
n
s
t
a
l
l
'
)
.
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
w
a
r
n
i
n
g
"
>
U
p
d
a
t
e
 
d
a
t
a
b
a
s
e
 
t
a
b
l
e
s
<
/
a
>

<
/
d
i
v
>
'
;

	
	
}
 
e
l
s
e
i
f
 
(
$
j
r
C
o
n
f
i
g
[
'
v
e
r
s
i
o
n
'
]
 
<
 
$
j
r
C
o
n
f
i
g
[
'
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
'
]
)
 
{

	
	
	
e
c
h
o
 
'

<
d
i
v
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
d
a
n
g
e
r
"
>

	
<
h
3
>
E
R
R
O
R
:
 
J
o
m
r
e
s
 
f
i
l
e
s
 
a
r
e
 
o
l
d
e
r
 
t
h
a
n
 
t
h
e
 
d
a
t
a
b
a
s
e
 
v
e
r
s
i
o
n
.
<
h
3
>
'

	
.
$
j
o
m
r
e
s
_
v
e
r
s
i
o
n
.
$
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
.

	
'
<
p
>
T
o
 
s
o
l
v
e
 
t
h
i
s
 
p
r
o
b
l
e
m
,
 
y
o
u
`
l
l
 
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
e
 
J
o
m
r
e
s
 
u
p
d
a
t
e
 
a
g
a
i
n
 
o
r
 
c
o
n
t
a
c
t
 
s
u
p
p
o
r
t
 
f
o
r
 
f
u
r
t
h
e
r
 
a
s
s
i
s
t
a
n
c
e
.
<
/
p
>

<
/
d
i
v
>
'
;

	
	
}
 
e
l
s
e
 
{

	
	
	
e
c
h
o
 
'

<
d
i
v
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
s
u
c
c
e
s
s
"
>

	
<
h
3
>
C
o
n
g
r
a
t
u
l
a
t
i
o
n
s
!
 
N
o
 
p
r
o
b
l
e
m
s
 
d
e
t
e
c
t
e
d
.
<
/
h
3
>
'

	
.
$
j
o
m
r
e
s
_
v
e
r
s
i
o
n
.
$
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
.

'
<
/
d
i
v
>
'
;

	
	
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

