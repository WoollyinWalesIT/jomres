
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
o
m
r
e
s
_
g
a
t
e
w
a
y
_
h
a
n
d
l
e
r

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

 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
r
p
o
r
t
a
l
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
'
)
;

 
 
 
 
 
 
 
 
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
g
e
t
_
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
 
=
 
$
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
-
>
p
a
y
p
a
l
C
o
n
f
i
g
O
p
t
i
o
n
s
;

 
 
 
 
}


 
 
 
 
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
 
c
a
l
l
b
a
c
k
(
$
i
n
t
e
r
n
a
l
_
c
a
l
l
 
=
 
f
a
l
s
e
,
 
$
a
r
g
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
=
 
'
'
;

 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
P
r
o
c
e
s
s
i
n
g
 
c
a
l
l
b
a
c
k
'
)
;

 
 
 
 
 
 
 
 
/
/
 
R
e
a
d
 
t
h
e
 
p
o
s
t
 
f
r
o
m
 
P
a
y
P
a
l
 
s
y
s
t
e
m
 
a
n
d
 
a
d
d
 
'
c
m
d
'

 
 
 
 
 
 
 
 
i
f
 
(
!
$
i
n
t
e
r
n
a
l
_
c
a
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
l
l
b
a
c
k
_
c
o
n
f
i
r
m
e
d
 
=
 
$
t
h
i
s
-
>
v
a
l
i
d
a
t
e
_
i
p
n
(
)
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
l
l
b
a
c
k
_
c
o
n
f
i
r
m
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
$
i
n
t
e
r
n
a
l
_
c
a
l
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
i
n
v
o
i
c
e
'
,
 
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
r
e
c
e
i
v
e
r
_
e
m
a
i
l
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
r
e
c
e
i
v
e
r
_
e
m
a
i
l
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
t
x
n
_
i
d
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
t
x
n
_
i
d
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
m
c
_
g
r
o
s
s
 
=
 
(
f
l
o
a
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
m
c
_
g
r
o
s
s
'
,
 
0
.
0
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
m
c
_
f
e
e
 
=
 
(
f
l
o
a
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
m
c
_
f
e
e
'
,
 
0
.
0
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
m
c
_
c
u
r
r
e
n
c
y
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
m
c
_
c
u
r
r
e
n
c
y
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
p
a
y
m
e
n
t
_
s
t
a
t
u
s
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
p
a
y
m
e
n
t
_
s
t
a
t
u
s
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
i
d
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
s
u
b
s
c
r
_
i
d
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
e
f
f
e
c
t
i
v
e
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
s
u
b
s
c
r
_
e
f
f
e
c
t
i
v
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
r
e
t
r
y
_
a
t
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
r
e
t
r
y
_
a
t
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
p
e
n
d
i
n
g
_
r
e
a
s
o
n
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
p
e
n
d
i
n
g
_
r
e
a
s
o
n
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
r
e
a
s
o
n
_
c
o
d
e
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
r
e
a
s
o
n
_
c
o
d
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
t
x
n
_
t
y
p
e
 
=
 
(
s
t
r
i
n
g
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
P
O
S
T
,
 
'
t
x
n
_
t
y
p
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
c
u
s
t
o
m
_
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
 
=
 
(
i
n
t
)
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
 
=
 
(
i
n
t
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
r
e
c
e
i
v
e
r
_
e
m
a
i
l
 
=
 
(
s
t
r
i
n
g
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
r
e
c
e
i
v
e
r
_
e
m
a
i
l
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
t
x
n
_
i
d
 
=
 
(
s
t
r
i
n
g
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
t
x
n
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
m
c
_
g
r
o
s
s
 
=
 
(
f
l
o
a
t
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
m
c
_
g
r
o
s
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
m
c
_
f
e
e
 
=
 
(
f
l
o
a
t
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
m
c
_
f
e
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
m
c
_
c
u
r
r
e
n
c
y
 
=
 
(
s
t
r
i
n
g
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
m
c
_
c
u
r
r
e
n
c
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
p
a
y
m
e
n
t
_
s
t
a
t
u
s
 
=
 
(
s
t
r
i
n
g
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
p
a
y
m
e
n
t
_
s
t
a
t
u
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
i
d
 
=
 
(
s
t
r
i
n
g
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
e
f
f
e
c
t
i
v
e
 
=
 
(
s
t
r
i
n
g
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
e
f
f
e
c
t
i
v
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
r
e
t
r
y
_
a
t
 
=
 
(
s
t
r
i
n
g
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
r
e
t
r
y
_
a
t
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
p
e
n
d
i
n
g
_
r
e
a
s
o
n
 
=
 
(
s
t
r
i
n
g
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
p
e
n
d
i
n
g
_
r
e
a
s
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
r
e
a
s
o
n
_
c
o
d
e
 
=
 
(
s
t
r
i
n
g
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
r
e
a
s
o
n
_
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
t
x
n
_
t
y
p
e
 
=
 
(
s
t
r
i
n
g
)
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
t
x
n
_
t
y
p
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
c
u
s
t
o
m
_
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
 
=
 
$
a
r
g
s
[
 
'
p
p
_
s
e
n
t
_
c
u
s
t
o
m
_
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
c
a
l
l
b
a
c
k
_
c
o
n
f
i
r
m
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
C
a
l
l
b
a
c
k
 
v
e
r
i
f
i
e
d
 
-
 
i
n
v
o
i
c
e
 
'
.
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
.
'
<
b
r
/
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
M
a
k
e
 
s
u
r
e
 
d
u
p
l
i
c
a
t
e
 
t
r
a
n
s
a
c
t
i
o
n
s
 
a
r
e
 
i
g
n
o
r
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
 
t
r
a
n
s
a
c
t
i
o
n
_
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
_
t
r
a
n
s
a
c
t
i
o
n
s
 
W
H
E
R
E
 
p
a
y
m
e
n
t
_
r
e
f
 
=
 
"
'
.
$
p
p
_
s
e
n
t
_
t
x
n
_
i
d
.
'
"
 
A
N
D
 
p
a
y
m
e
n
t
_
r
e
s
u
l
t
 
=
 
"
P
a
y
m
e
n
t
:
 
C
o
m
p
l
e
t
e
d
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
r
a
n
s
a
c
t
i
o
n
 
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
t
r
a
n
s
a
c
t
i
o
n
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
i
d
 
=
 
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
-
>
g
e
t
I
n
v
o
i
c
e
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
t
r
i
m
(
$
p
p
_
s
e
n
t
_
r
e
c
e
i
v
e
r
_
e
m
a
i
l
)
 
!
=
 
t
r
i
m
(
$
t
h
i
s
-
>
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
[
 
'
e
m
a
i
l
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
R
e
c
e
i
v
e
r
 
e
-
m
a
i
l
 
d
o
e
s
 
n
o
t
 
m
a
t
c
h
 
e
-
m
a
i
l
 
i
n
 
s
e
t
t
i
n
g
s
 
:
 
p
p
_
s
e
n
t
_
r
e
c
e
i
v
e
r
_
e
m
a
i
l
 
'
.
$
p
p
_
s
e
n
t
_
r
e
c
e
i
v
e
r
_
e
m
a
i
l
.
'
 
-
 
t
h
i
s
-
>
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
 
'
.
$
t
h
i
s
-
>
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
[
 
'
e
m
a
i
l
'
 
]
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
-
>
i
d
 
=
 
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
-
>
g
e
t
I
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
p
p
_
s
e
n
t
_
p
a
y
m
e
n
t
_
s
t
a
t
u
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
C
o
m
p
l
e
t
e
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
-
>
m
a
r
k
_
i
n
v
o
i
c
e
_
p
a
i
d
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
t
a
t
u
s
:
 
C
o
m
p
l
e
t
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
P
a
y
m
e
n
t
:
 
C
o
m
p
l
e
t
e
d
'
,
 
$
p
p
_
s
e
n
t
_
m
c
_
c
u
r
r
e
n
c
y
,
 
$
p
p
_
s
e
n
t
_
m
c
_
g
r
o
s
s
,
 
$
p
p
_
s
e
n
t
_
m
c
_
f
e
e
,
 
$
p
p
_
s
e
n
t
_
t
x
n
_
i
d
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
D
i
d
 
t
h
e
y
 
p
a
y
 
t
h
e
 
r
i
g
h
t
 
a
m
o
u
n
t
?

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
_
i
n
i
t
_
t
o
t
a
l
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
(
f
l
o
a
t
)
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
-
>
i
n
i
t
_
t
o
t
a
l
,
 
2
,
 
'
.
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
m
p
_
i
n
i
t
_
t
o
t
a
l
 
=
=
 
0
.
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
 
=
 
$
p
p
_
s
e
n
t
_
c
u
s
t
o
m
_
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
P
a
i
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
-
>
m
a
r
k
_
i
n
v
o
i
c
e
_
p
a
i
d
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
N
o

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
I
n
c
o
r
r
e
c
t
 
a
m
o
u
n
t
 
p
a
i
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
D
e
n
i
e
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
t
a
t
u
s
:
 
D
e
n
i
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
P
a
y
m
e
n
t
:
 
D
e
n
i
e
d
'
,
 
$
p
p
_
s
e
n
t
_
m
c
_
c
u
r
r
e
n
c
y
,
 
$
p
p
_
s
e
n
t
_
m
c
_
g
r
o
s
s
,
 
$
p
p
_
s
e
n
t
_
m
c
_
f
e
e
,
 
$
p
p
_
s
e
n
t
_
t
x
n
_
i
d
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
F
a
i
l
e
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
t
a
t
u
s
:
 
F
a
i
l
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
P
a
y
m
e
n
t
:
 
F
a
i
l
e
d
'
,
 
$
p
p
_
s
e
n
t
_
m
c
_
c
u
r
r
e
n
c
y
,
 
$
p
p
_
s
e
n
t
_
m
c
_
g
r
o
s
s
,
 
$
p
p
_
s
e
n
t
_
m
c
_
f
e
e
,
 
$
p
p
_
s
e
n
t
_
t
x
n
_
i
d
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
P
e
n
d
i
n
g
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
C
o
n
v
e
r
t
 
P
a
y
P
a
l
 
'
p
e
n
d
i
n
g
_
r
e
a
s
o
n
'
 
t
o
 
E
n
g
l
i
s
h

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
p
p
_
s
e
n
t
_
p
e
n
d
i
n
g
_
r
e
a
s
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
a
d
d
r
e
s
s
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
 
=
 
'
C
u
s
t
o
m
e
r
 
a
d
d
r
e
s
s
 
i
s
 
n
o
t
 
c
o
n
f
i
r
m
e
d
.
 
T
h
e
 
p
a
y
m
e
n
t
 
m
u
s
t
 
b
e
 
m
a
n
u
a
l
l
y
 
a
c
c
e
p
t
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
e
c
h
e
c
k
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
 
=
 
'
P
a
y
m
e
n
t
 
w
a
s
 
m
a
d
e
 
u
s
i
n
g
 
a
 
e
C
h
e
c
k
 
w
h
i
c
h
 
h
a
s
 
n
o
t
 
y
e
t
 
c
l
e
a
r
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
i
n
t
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
 
=
 
'
T
h
e
 
p
a
y
m
e
n
t
 
m
u
s
t
 
b
e
 
m
a
n
u
a
l
l
y
 
a
c
c
e
p
t
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
m
u
l
t
i
_
c
u
r
r
e
n
c
y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
 
=
 
'
P
a
y
m
e
n
t
 
i
s
 
i
n
 
f
o
r
e
i
g
n
 
c
u
r
r
e
n
c
y
.
 
T
h
e
 
p
a
y
m
e
n
t
 
m
u
s
t
 
b
e
 
m
a
n
u
a
l
l
y
 
a
c
c
e
p
t
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
u
n
i
l
a
t
e
r
a
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
 
=
 
'
P
a
y
m
e
n
t
 
w
a
s
 
m
a
d
e
 
t
o
 
a
n
 
u
n
c
o
n
f
i
r
m
e
d
 
e
-
m
a
i
l
 
a
d
d
r
e
s
s
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
u
p
g
r
a
d
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
 
=
 
'
T
h
e
 
M
e
r
c
h
a
n
t
 
P
a
y
P
a
l
 
a
c
c
o
u
n
t
 
c
a
n
n
o
t
 
a
c
c
e
p
t
 
t
h
i
s
 
p
a
y
m
e
n
t
 
o
n
 
t
h
e
 
c
u
r
r
e
n
t
 
a
c
c
o
u
n
t
 
t
y
p
e
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
o
t
h
e
r
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
 
=
 
'
U
n
k
n
o
w
n
 
r
e
a
s
o
n
.
 
C
o
n
t
a
c
t
 
P
a
y
P
a
l
 
C
u
s
t
o
m
e
r
 
S
e
r
v
i
c
e
s
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
 
=
 
'
U
n
k
n
o
w
n
 
r
e
a
s
o
n
.
 
C
o
n
t
a
c
t
 
P
a
y
P
a
l
 
C
u
s
t
o
m
e
r
 
S
e
r
v
i
c
e
s
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
-
>
m
a
r
k
_
i
n
v
o
i
c
e
_
p
e
n
d
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
t
a
t
u
s
:
 
P
e
n
d
i
n
g
 
(
'
.
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
.
'
)
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
P
a
y
m
e
n
t
:
 
P
e
n
d
i
n
g
 
(
'
.
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
.
'
)
'
,
 
$
p
p
_
s
e
n
t
_
m
c
_
c
u
r
r
e
n
c
y
,
 
$
p
p
_
s
e
n
t
_
m
c
_
g
r
o
s
s
,
 
$
p
p
_
s
e
n
t
_
m
c
_
f
e
e
,
 
$
p
p
_
s
e
n
t
_
t
x
n
_
i
d
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
R
e
f
u
n
d
e
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
-
>
m
a
r
k
_
i
n
v
o
i
c
e
_
c
a
n
c
e
l
l
e
d
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
t
a
t
u
s
:
 
R
e
f
u
n
d
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
P
a
y
m
e
n
t
:
 
R
e
f
u
n
d
e
d
'
,
 
$
p
p
_
s
e
n
t
_
m
c
_
c
u
r
r
e
n
c
y
,
 
$
p
p
_
s
e
n
t
_
m
c
_
g
r
o
s
s
,
 
$
p
p
_
s
e
n
t
_
m
c
_
f
e
e
,
 
$
p
p
_
s
e
n
t
_
t
x
n
_
i
d
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
R
e
v
e
r
s
e
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
C
o
n
v
e
r
t
 
P
a
y
P
a
l
 
'
r
e
a
s
o
n
_
c
o
d
e
'
 
t
o
 
E
n
g
l
i
s
h

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
p
p
_
s
e
n
t
_
r
e
a
s
o
n
_
c
o
d
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
b
u
y
e
r
_
c
o
m
p
l
a
i
n
t
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
e
r
s
a
l
_
r
e
a
s
o
n
 
=
 
'
T
h
e
 
c
u
s
t
o
m
e
r
 
h
a
s
 
c
o
m
p
l
a
i
n
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
c
h
a
r
g
e
b
a
c
k
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
e
r
s
a
l
_
r
e
a
s
o
n
 
=
 
'
T
h
e
 
c
u
s
t
o
m
e
r
 
h
a
s
 
i
s
s
u
e
d
 
a
 
c
h
a
r
g
e
b
a
c
k
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
g
u
a
r
a
n
t
e
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
e
r
s
a
l
_
r
e
a
s
o
n
 
=
 
'
T
h
e
 
c
u
s
t
o
m
e
r
 
h
a
s
 
t
r
i
g
g
e
r
e
d
 
a
 
m
o
n
e
y
 
b
a
c
k
 
g
u
a
r
a
n
t
e
e
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
r
e
f
u
n
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
e
r
s
a
l
_
r
e
a
s
o
n
 
=
 
'
T
h
e
 
c
u
s
t
o
m
e
r
 
w
a
s
 
r
e
f
u
n
d
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
r
e
f
u
n
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
e
r
s
a
l
_
r
e
a
s
o
n
 
=
 
'
U
n
k
n
o
w
n
 
r
e
a
s
o
n
.
 
C
o
n
t
a
c
t
 
P
a
y
P
a
l
 
C
u
s
t
o
m
e
r
 
S
e
r
v
i
c
e
s
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
v
e
r
s
a
l
_
r
e
a
s
o
n
 
=
 
'
U
n
k
n
o
w
n
 
r
e
a
s
o
n
.
 
C
o
n
t
a
c
t
 
P
a
y
P
a
l
 
C
u
s
t
o
m
e
r
 
S
e
r
v
i
c
e
s
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
-
>
m
a
r
k
_
i
n
v
o
i
c
e
_
c
a
n
c
e
l
l
e
d
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
t
a
t
u
s
:
 
R
e
f
u
n
d
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
P
a
y
m
e
n
t
:
 
R
e
f
u
n
d
e
d
 
(
'
.
$
p
e
n
d
i
n
g
_
r
e
a
s
o
n
.
'
)
'
,
 
$
p
p
_
s
e
n
t
_
m
c
_
c
u
r
r
e
n
c
y
,
 
$
p
p
_
s
e
n
t
_
m
c
_
g
r
o
s
s
,
 
$
p
p
_
s
e
n
t
_
m
c
_
f
e
e
,
 
$
p
p
_
s
e
n
t
_
t
x
n
_
i
d
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
(
'
p
p
_
s
e
n
t
_
p
a
y
m
e
n
t
_
s
t
a
t
u
s
 
"
'
.
$
p
p
_
s
e
n
t
_
p
a
y
m
e
n
t
_
s
t
a
t
u
s
.
'
"
 
n
o
t
 
r
e
c
o
g
n
i
s
e
d
.
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
S
u
b
s
c
r
i
p
t
i
o
n
 
S
t
a
t
u
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
r
p
o
r
t
a
l
_
s
u
b
s
c
r
i
p
t
i
o
n
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
s
c
r
i
p
t
i
o
n
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
s
u
b
s
c
r
i
p
t
i
o
n
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
i
d
 
=
 
$
p
p
_
s
e
n
t
_
c
u
s
t
o
m
_
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
g
e
t
S
u
b
s
c
r
i
p
t
i
o
n
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
 
F
o
u
n
d
 
s
u
b
s
c
r
i
p
t
i
o
n
,
 
t
y
p
e
 
s
e
t
 
t
o
 
'
.
$
p
p
_
s
e
n
t
_
t
x
n
_
t
y
p
e
.
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
p
p
_
s
e
n
t
_
t
x
n
_
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
u
b
s
c
r
_
s
i
g
n
u
p
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
C
r
e
a
t
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
M
o
d
i
f
y
 
t
h
e
 
s
t
a
t
u
s
 
o
f
 
t
h
e
 
s
u
b
s
c
r
i
p
t
i
o
n
 
t
o
 
1
 
(
c
r
e
a
t
e
d
/
a
c
t
i
v
e
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
s
t
a
t
u
s
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
o
m
m
i
t
U
p
d
a
t
e
S
u
b
s
c
r
i
p
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
-
>
m
a
r
k
_
i
n
v
o
i
c
e
_
p
a
i
d
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
C
r
e
a
t
e
d
'
,
 
'
'
,
 
0
.
0
0
,
 
0
.
0
0
,
 
$
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
C
r
e
a
t
e
d
,
 
s
e
t
t
i
n
g
 
s
t
a
t
u
s
 
t
o
 
'
.
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
s
t
a
t
u
s
.
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
u
b
s
c
r
_
c
a
n
c
e
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
C
a
n
c
e
l
l
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
M
o
d
i
f
y
 
t
h
e
 
s
t
a
t
u
s
 
o
f
 
t
h
e
 
s
u
b
s
c
r
i
p
t
i
o
n
 
t
o
 
1
 
(
c
r
e
a
t
e
d
/
a
c
t
i
v
e
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
s
t
a
t
u
s
 
=
 
2
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
o
m
m
i
t
U
p
d
a
t
e
S
u
b
s
c
r
i
p
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
h
a
n
d
l
e
r
-
>
m
a
r
k
_
i
n
v
o
i
c
e
_
c
a
n
c
e
l
l
e
d
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
C
a
n
c
e
l
l
e
d
'
,
 
'
'
,
 
0
.
0
0
,
 
0
.
0
0
,
 
$
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
I
f
 
w
e
'
r
e
 
i
n
 
s
a
n
d
b
o
x
 
m
o
d
e
 
w
e
 
w
i
l
l
 
n
o
t
 
w
a
i
t
 
f
o
r
 
t
h
e
 
e
n
d
 
o
f
 
t
e
r
m
 
m
e
s
s
a
g
e
 
f
r
o
m
 
p
a
y
p
a
l
.
 
I
n
s
t
e
a
d
,
 
w
e
'
l
l
 
c
a
n
c
l
e
 
t
h
e
 
s
u
b
s
c
r
i
p
t
i
o
n
s
 
r
i
g
h
t
 
n
o
w
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
[
 
'
u
s
e
s
a
n
d
b
o
x
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
s
t
a
t
u
s
 
=
 
3
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
o
m
m
i
t
U
p
d
a
t
e
S
u
b
s
c
r
i
p
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
o
w
e
d
P
r
o
p
e
r
t
i
e
s
 
=
 
s
u
b
s
c
r
i
b
e
r
s
_
g
e
t
A
v
a
i
l
a
b
l
e
P
r
o
p
e
r
t
y
S
l
o
t
s
(
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
m
s
_
u
s
e
r
_
i
d
)
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
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
 
=
 
s
u
b
s
c
r
i
b
e
r
s
_
g
e
t
M
a
n
a
g
e
r
s
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
(
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
m
s
_
u
s
e
r
_
i
d
)
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
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
_
c
o
u
n
t
 
=
 
c
o
u
n
t
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
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
f
f
e
r
e
n
c
e
 
=
 
$
e
x
i
s
t
i
n
g
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
_
c
o
u
n
t
 
-
 
$
a
l
l
o
w
e
d
P
r
o
p
e
r
t
i
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
L
e
t
'
s
 
u
n
p
u
b
l
i
s
h
 
a
 
f
e
w
 
p
r
o
p
e
r
t
i
e
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
l
l
o
w
e
d
P
r
o
p
e
r
t
i
e
s
 
<
=
 
$
e
x
i
s
t
i
n
g
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
_
c
o
u
n
t
 
&
&
 
$
d
i
f
f
e
r
e
n
c
e
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
U
n
p
u
b
l
i
s
h
i
n
g
 
'
.
$
d
i
f
f
e
r
e
n
c
e
.
'
 
p
r
o
p
e
r
t
i
e
s
 
d
u
e
 
t
o
 
u
n
s
u
b
s
c
r
i
b
e
 
f
r
o
m
 
'
.
(
i
n
t
)
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
m
s
_
u
s
e
r
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
u
b
s
c
r
i
b
e
r
s
_
u
n
p
u
b
l
i
s
h
N
p
r
o
p
e
r
t
i
e
s
(
$
d
i
f
f
e
r
e
n
c
e
,
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
m
s
_
u
s
e
r
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
C
a
n
c
e
l
l
e
d
,
 
s
e
t
t
i
n
g
 
s
t
a
t
u
s
 
t
o
 
'
.
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
s
t
a
t
u
s
.
'
<
b
r
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
u
b
s
c
r
_
f
a
i
l
e
d
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
F
a
i
l
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
F
a
i
l
e
d
'
,
 
'
'
,
 
0
.
0
0
,
 
0
.
0
0
,
 
$
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
i
d
,
 
'
R
e
t
r
y
 
a
t
:
 
'
.
$
p
p
_
s
e
n
t
_
r
e
t
r
y
_
a
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
F
a
i
l
e
d
,
 
s
e
t
t
i
n
g
 
s
t
a
t
u
s
 
t
o
 
'
.
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
s
t
a
t
u
s
.
'
<
b
r
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
u
b
s
c
r
_
e
o
t
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
s
t
a
t
u
s
 
=
 
3
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
o
m
m
i
t
U
p
d
a
t
e
S
u
b
s
c
r
i
p
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
o
w
e
d
P
r
o
p
e
r
t
i
e
s
 
=
 
s
u
b
s
c
r
i
b
e
r
s
_
g
e
t
A
v
a
i
l
a
b
l
e
P
r
o
p
e
r
t
y
S
l
o
t
s
(
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
m
s
_
u
s
e
r
_
i
d
)
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
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
 
=
 
s
u
b
s
c
r
i
b
e
r
s
_
g
e
t
M
a
n
a
g
e
r
s
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
(
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
m
s
_
u
s
e
r
_
i
d
)
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
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
_
c
o
u
n
t
 
=
 
c
o
u
n
t
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
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
f
f
e
r
e
n
c
e
 
=
 
$
e
x
i
s
t
i
n
g
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
_
c
o
u
n
t
 
-
 
$
a
l
l
o
w
e
d
P
r
o
p
e
r
t
i
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
L
e
t
'
s
 
u
n
p
u
b
l
i
s
h
 
a
 
f
e
w
 
p
r
o
p
e
r
t
i
e
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
l
l
o
w
e
d
P
r
o
p
e
r
t
i
e
s
 
<
=
 
$
e
x
i
s
t
i
n
g
P
u
b
l
i
s
h
e
d
P
r
o
p
e
r
t
i
e
s
_
c
o
u
n
t
 
&
&
 
$
d
i
f
f
e
r
e
n
c
e
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
U
n
p
u
b
l
i
s
h
i
n
g
 
'
.
$
d
i
f
f
e
r
e
n
c
e
.
'
 
p
r
o
p
e
r
t
i
e
s
 
d
u
e
 
t
o
 
u
n
s
u
b
s
c
r
i
b
e
 
f
r
o
m
 
'
.
(
i
n
t
)
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
m
s
_
u
s
e
r
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
u
b
s
c
r
i
b
e
r
s
_
u
n
p
u
b
l
i
s
h
N
p
r
o
p
e
r
t
i
e
s
(
$
d
i
f
f
e
r
e
n
c
e
,
 
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
c
m
s
_
u
s
e
r
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
E
n
d
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
E
n
d
e
d
'
,
 
'
'
,
 
0
.
0
0
,
 
0
.
0
0
,
 
$
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
E
n
d
e
d
,
 
s
e
t
t
i
n
g
 
s
t
a
t
u
s
 
t
o
 
'
.
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
s
t
a
t
u
s
.
'
<
b
r
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
u
b
s
c
r
_
m
o
d
i
f
y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
C
h
a
n
g
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
,
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
C
h
a
n
g
e
d
'
,
 
'
'
,
 
0
.
0
0
,
 
0
.
0
0
,
 
$
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
i
d
,
 
'
E
f
f
e
c
t
i
v
e
:
 
'
.
$
p
p
_
s
e
n
t
_
s
u
b
s
c
r
_
e
f
f
e
c
t
i
v
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
C
h
a
n
g
e
d
,
 
s
e
t
t
i
n
g
 
s
t
a
t
u
s
 
t
o
 
'
.
$
s
u
b
s
c
r
i
p
t
i
o
n
-
>
s
t
a
t
u
s
.
'
<
b
r
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
:
 
p
p
_
s
e
n
t
_
t
x
n
_
t
y
p
e
 
n
o
t
 
r
e
c
o
g
n
i
s
e
d
 
'
.
$
p
p
_
s
e
n
t
_
t
x
n
_
t
y
p
e
.
'
<
b
r
>
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
F
i
n
i
s
h
e
d
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
 
I
D
 
n
o
t
 
f
o
u
n
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
I
n
v
o
i
c
e
 
I
D
 
n
o
t
 
f
o
u
n
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
D
u
p
l
i
c
a
t
e
 
t
r
a
n
s
a
c
t
i
o
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
S
u
b
s
c
r
i
p
t
i
o
n
 
I
D
 
n
o
t
 
s
e
n
t
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
_
l
o
g
 
.
=
 
'
C
a
l
l
b
a
c
k
 
N
O
T
 
v
e
r
i
f
i
e
d
 
-
 
i
n
v
o
i
c
e
 
'
.
$
p
p
_
s
e
n
t
_
i
n
v
o
i
c
e
_
i
d
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
h
e
a
d
e
r
(
'
H
T
T
P
/
1
.
0
 
2
0
0
 
O
K
'
,
 
f
a
l
s
e
,
 
2
0
0
)
;
 
/
/
 
N
e
e
d
e
d
 
o
t
h
e
r
w
i
s
e
 
P
a
y
P
a
l
 
m
a
y
 
g
i
v
e
 
a
n
 
e
r
r
o
r

 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
$
g
a
t
e
w
a
y
_
l
o
g
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
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
 
v
a
l
i
d
a
t
e
_
i
p
n
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
p
a
r
s
e
 
t
h
e
 
p
a
y
p
a
l
 
U
R
L

 
 
 
 
 
 
 
 
$
h
o
s
t
 
=
 
$
t
h
i
s
-
>
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
[
 
'
c
a
l
l
b
a
c
k
_
u
r
l
'
 
]
;

 
 
 
 
 
 
 
 
$
p
a
t
h
 
=
 
'
'
;


 
 
 
 
 
 
 
 
/
/
g
a
t
e
w
a
y
_
l
o
g
(
"
A
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
 
v
a
l
i
d
a
t
e
 
I
P
N
 
"
)
;

 
 
 
 
 
 
 
 
/
/
 
g
e
n
e
r
a
t
e
 
t
h
e
 
p
o
s
t
 
s
t
r
i
n
g
 
f
r
o
m
 
t
h
e
 
_
P
O
S
T
 
v
a
r
s
 
a
s
 
w
e
l
l
 
a
s
 
l
o
a
d
 
t
h
e

 
 
 
 
 
 
 
 
/
/
 
_
P
O
S
T
 
v
a
r
s
 
i
n
t
o
 
a
n
 
a
r
r
y
 
s
o
 
w
e
 
c
a
n
 
p
l
a
y
 
w
i
t
h
 
t
h
e
m
 
f
r
o
m
 
t
h
e
 
c
a
l
l
i
n
g

 
 
 
 
 
 
 
 
/
/
 
s
c
r
i
p
t
.

 
 
 
 
 
 
 
 
$
p
o
s
t
_
s
t
r
i
n
g
 
=
 
'
'
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
_
P
O
S
T
 
a
s
 
$
f
i
e
l
d
 
=
>
 
$
v
a
l
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
p
n
_
d
a
t
a
[
 
"
$
f
i
e
l
d
"
 
]
 
=
 
$
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
s
t
r
i
n
g
 
.
=
 
$
f
i
e
l
d
.
'
=
'
.
u
r
l
e
n
c
o
d
e
(
s
t
r
i
p
s
l
a
s
h
e
s
(
$
v
a
l
u
e
)
)
.
'
&
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
p
o
s
t
_
s
t
r
i
n
g
 
.
=
 
'
c
m
d
=
_
n
o
t
i
f
y
-
v
a
l
i
d
a
t
e
'
;
 
/
/
 
a
p
p
e
n
d
 
i
p
n
 
c
o
m
m
a
n
d


 
 
 
 
 
 
 
 
/
/
 
o
p
e
n
 
t
h
e
 
c
o
n
n
e
c
t
i
o
n
 
t
o
 
p
a
y
p
a
l

 
 
 
 
 
 
 
 
/
/
$
f
p
 
=
 
f
s
o
c
k
o
p
e
n
(
$
t
h
i
s
-
>
p
a
y
p
a
l
_
s
e
t
t
i
n
g
s
[
'
c
a
l
l
b
a
c
k
_
u
r
l
'
]
,
"
8
0
"
,
$
e
r
r
_
n
u
m
,
$
e
r
r
_
s
t
r
,
3
0
)
;

 
 
 
 
 
 
 
 
i
f
 
(
f
u
n
c
t
i
o
n
_
e
x
i
s
t
s
(
'
c
u
r
l
_
i
n
i
t
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
P
o
s
t
i
n
g
 
d
a
t
a
 
b
a
c
k
 
t
o
 
p
a
y
p
a
l
 
u
s
i
n
g
 
c
u
r
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
h
 
=
 
c
u
r
l
_
i
n
i
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
U
R
L
,
 
'
h
t
t
p
s
:
/
/
'
.
$
h
o
s
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
C
O
N
N
E
C
T
T
I
M
E
O
U
T
,
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
U
S
E
R
A
G
E
N
T
,
 
'
J
o
m
r
e
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
S
T
,
 
c
o
u
n
t
(
$
t
h
i
s
-
>
i
p
n
_
d
a
t
a
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
P
O
S
T
F
I
E
L
D
S
,
 
$
p
o
s
t
_
s
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
S
S
L
_
V
E
R
I
F
Y
P
E
E
R
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
S
S
L
_
V
E
R
I
F
Y
H
O
S
T
,
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
s
e
t
o
p
t
(
$
c
h
,
 
C
U
R
L
O
P
T
_
R
E
T
U
R
N
T
R
A
N
S
F
E
R
,
 
t
r
u
e
)
;
 
/
/
 
W
i
t
h
o
u
t
 
t
h
i
s
 
t
h
e
 
r
e
s
p
o
n
s
e
 
i
s
 
t
r
u
e
,
 
w
h
e
r
e
a
s
 
w
e
 
w
a
n
t
 
t
h
e
 
a
c
t
u
a
l
 
c
o
n
t
e
n
t
s
 
o
f
 
t
h
e
 
r
e
s
p
o
n
s
e

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
p
n
_
r
e
s
p
o
n
s
e
 
=
 
t
r
i
m
(
c
u
r
l
_
e
x
e
c
(
$
c
h
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
f
o
 
=
 
c
u
r
l
_
g
e
t
i
n
f
o
(
$
c
h
)
;


 
 
 
 
 
 
 
 
 
 
 
 
c
u
r
l
_
c
l
o
s
e
(
$
c
h
)
;

 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
R
e
c
e
i
v
e
d
 
r
e
s
p
o
n
s
e
 
'
.
s
e
r
i
a
l
i
z
e
(
$
t
h
i
s
-
>
i
p
n
_
r
e
s
p
o
n
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
a
t
e
w
a
y
_
l
o
g
(
"
C
U
R
L
 
I
n
f
o
 
"
.
s
e
r
i
a
l
i
z
e
(
$
i
n
f
o
)
 
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
c
o
u
l
d
 
n
o
t
 
o
p
e
n
 
t
h
e
 
c
o
n
n
e
c
t
i
o
n
.
 
 
I
f
 
l
o
g
g
i
n
g
 
i
s
 
o
n
,
 
t
h
e
 
e
r
r
o
r
 
m
e
s
s
a
g
e
 
w
i
l
l
 
b
e
 
i
n
 
t
h
e
 
l
o
g
.

 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
C
u
r
l
 
n
o
t
 
e
n
a
b
l
e
d
/
i
n
s
t
a
l
l
e
d
.
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
i
s
t
r
(
$
t
h
i
s
-
>
i
p
n
_
r
e
s
p
o
n
s
e
,
 
'
V
E
R
I
F
I
E
D
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
V
a
l
i
d
 
I
P
N
 
t
r
a
n
s
a
c
t
i
o
n
.

 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
I
P
N
 
V
a
l
i
d
a
t
i
o
n
 
s
u
c
c
e
s
s
f
u
l
.
 
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
I
n
v
a
l
i
d
 
I
P
N
 
t
r
a
n
s
a
c
t
i
o
n
.
 
 
C
h
e
c
k
 
t
h
e
 
l
o
g
 
f
o
r
 
d
e
t
a
i
l
s
.

 
 
 
 
 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
I
P
N
 
V
a
l
i
d
a
t
i
o
n
 
F
a
i
l
e
d
.
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
 
l
o
g
_
t
r
a
n
s
a
c
t
i
o
n
(
$
i
n
v
o
i
c
e
_
i
d
,
 
$
r
e
s
u
l
t
,
 
$
c
u
r
r
e
n
c
y
,
 
$
a
m
o
u
n
t
,
 
$
f
e
e
s
,
 
$
r
e
f
,
 
$
n
o
t
e
s
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
L
o
g
g
i
n
g
 
t
r
a
n
s
a
c
t
i
o
n
'
)
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
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
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
_
t
r
a
n
s
a
c
t
i
o
n
s
 
S
E
T

	
	
	
i
n
v
o
i
c
e
_
i
d
 
=
 
"
'
 
.
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
i
d
.
'
"
,

	
	
	
t
i
m
e
_
a
d
d
e
d
 
=
 
"
'
 
.
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
.
'
"
,

	
	
	
g
a
t
e
w
a
y
_
i
d
 
=
 
"
p
a
y
p
a
l
"
,

	
	
	
p
a
y
m
e
n
t
_
r
e
s
u
l
t
 
=
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
r
e
s
u
l
t
.
'
"
,

	
	
	
p
a
y
m
e
n
t
_
c
u
r
r
e
n
c
y
 
=
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
c
u
r
r
e
n
c
y
.
'
"
,

	
	
	
p
a
y
m
e
n
t
_
a
m
o
u
n
t
 
=
 
"
'
 
.
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
a
m
o
u
n
t
,
 
2
,
 
'
.
'
,
 
'
'
)
.
'
"
,

	
	
	
p
a
y
m
e
n
t
_
f
e
e
s
 
=
 
"
'
 
.
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
f
e
e
s
,
 
2
,
 
'
.
'
,
 
'
'
)
.
'
"
,

	
	
	
p
a
y
m
e
n
t
_
r
e
f
 
=
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
r
e
f
.
'
"
,

	
	
	
n
o
t
e
s
 
=
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
n
o
t
e
s
.
'
"
'
;

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
g
a
t
e
w
a
y
_
l
o
g
(
'
T
r
a
n
s
a
c
t
i
o
n
 
l
o
g
g
e
d
 
'
.
$
q
u
e
r
y
)
;

 
 
 
 
}

}

