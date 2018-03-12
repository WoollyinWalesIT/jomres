
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


/
/
 
T
h
e
 
p
u
r
p
o
s
e
 
o
f
 
t
h
i
s
 
f
u
n
c
t
i
o
n
 
i
s
 
t
o
 
a
l
l
o
w
 
u
s
 
t
o
 
o
v
e
r
r
i
d
e
 
t
h
e
 
b
o
o
k
i
n
g
 
n
u
m
b
e
r
 
p
r
o
g
r
a
m
a
t
i
c
a
l
l
y
.

f
u
n
c
t
i
o
n
 
s
e
t
_
b
o
o
k
i
n
g
_
n
u
m
b
e
r
(
)

{

 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
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
t
e
m
p
_
b
o
o
k
i
n
g
_
h
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
!
i
s
s
e
t
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
 
]
)
 
|
|
 
t
r
i
m
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
 
]
)
 
=
=
 
'
'
 
|
|
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
$
k
e
e
p
l
o
o
k
i
n
g
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
k
e
e
p
l
o
o
k
i
n
g
)
:

 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
r
t
n
u
m
b
e
r
 
=
 
m
t
_
r
a
n
d
(
1
0
0
0
0
0
0
0
,
 
9
9
9
9
9
9
9
9
)
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
c
o
n
t
r
a
c
t
_
u
i
d
`
 
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
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
`
t
a
g
`
 
=
 
'
"
.
$
c
a
r
t
n
u
m
b
e
r
.
"
'
 
L
I
M
I
T
 
1
"
;

 
 
 
 
 
 
 
 
$
b
k
l
i
s
t
 
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
e
m
p
t
y
(
$
b
k
l
i
s
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
e
p
l
o
o
k
i
n
g
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
n
d
w
h
i
l
e
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
 
]
 
=
 
$
c
a
r
t
n
u
m
b
e
r
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
c
a
r
t
n
u
m
b
e
r
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
b
o
o
k
i
n
g
[
 
'
b
o
o
k
i
n
g
_
n
u
m
b
e
r
'
 
]
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
c
a
r
t
n
u
m
b
e
r
;

}

