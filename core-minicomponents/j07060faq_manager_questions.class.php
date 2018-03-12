
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
0
7
0
6
0
f
a
q
_
m
a
n
a
g
e
r
_
q
u
e
s
t
i
o
n
s

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
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
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
J
R
U
s
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
r
_
u
s
e
r
'
)
;


 
 
 
 
 
 
 
 
$
k
b
 
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
k
n
o
w
l
e
d
g
e
b
a
s
e
'
)
;


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y

 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
C
R
E
A
T
P
R
O
P
E
R
T
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
C
R
E
A
T
P
R
O
P
E
R
T
Y
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
C
R
E
A
T
P
R
O
P
E
R
T
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
C
R
E
A
T
P
R
O
P
E
R
T
Y
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
P
R
E
V
I
E
W
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
P
R
E
V
I
E
W
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
P
R
E
V
I
E
W
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
P
R
E
V
I
E
W
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
A
D
D
R
O
O
M
S
_
M
R
P
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
A
D
D
R
O
O
M
S
_
M
R
P
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
A
D
D
R
O
O
M
S
_
M
R
P
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
A
D
D
R
O
O
M
S
_
M
R
P
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
A
D
D
P
R
I
C
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
A
D
D
P
R
I
C
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
A
D
D
P
R
I
C
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
A
D
D
P
R
I
C
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
E
X
T
R
A
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
E
X
T
R
A
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
E
X
T
R
A
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
E
X
T
R
A
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
L
A
N
G
U
A
G
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
L
A
N
G
U
A
G
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
L
A
N
G
U
A
G
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
L
A
N
G
U
A
G
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
_
S
U
P
E
R
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
_
S
U
P
E
R
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
_
S
U
P
E
R
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
_
S
U
P
E
R
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
Y
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
O
T
H
E
R
P
R
O
P
E
R
T
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
p
a
y
m
e
n
t
s

 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
A
Y
M
E
N
T
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
P
A
Y
M
E
N
T
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
P
A
Y
M
E
N
T
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
P
A
Y
M
E
N
T
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
P
A
Y
M
E
N
T
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
A
Y
M
E
N
T
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
Y
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
Y
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
A
Y
M
E
N
T
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
D
I
S
C
O
U
N
T
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
D
I
S
C
O
U
N
T
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
D
I
S
C
O
U
N
T
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
D
I
S
C
O
U
N
T
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
/
/
b
o
o
k
i
n
g
s

 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
B
O
O
K
I
N
G
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
B
O
O
K
I
N
G
S
_
C
O
N
T
A
C
T
P
A
G
E
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
B
O
O
K
I
N
G
S
_
C
O
N
T
A
C
T
P
A
G
E
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
B
O
O
K
I
N
G
S
_
C
O
N
T
A
C
T
P
A
G
E
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
B
O
O
K
I
N
G
S
_
C
O
N
T
A
C
T
P
A
G
E
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
B
O
O
K
I
N
G
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
B
O
O
K
I
N
G
S
_
B
L
A
C
K
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
B
O
O
K
I
N
G
S
_
B
L
A
C
K
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
B
O
O
K
I
N
G
S
_
B
L
A
C
K
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
B
O
O
K
I
N
G
S
_
B
L
A
C
K
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
B
O
O
K
I
N
G
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
G
U
E
S
T
T
Y
P
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
G
U
E
S
T
T
Y
P
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
G
U
E
S
T
T
Y
P
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
G
U
E
S
T
T
Y
P
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
/
/
i
m
a
g
e
s

 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
I
M
A
G
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
I
N
T
R
O
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
I
N
T
R
O
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
I
N
T
R
O
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
I
N
T
R
O
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
I
M
A
G
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
M
A
I
N
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
M
A
I
N
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
M
A
I
N
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
M
A
I
N
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
I
M
A
G
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
R
E
S
O
U
R
C
E
F
E
A
T
U
R
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
I
M
A
G
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
R
O
O
M
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
R
O
O
M
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
R
O
O
M
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
R
O
O
M
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
I
M
A
G
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
S
L
I
D
E
S
H
O
W
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
S
L
I
D
E
S
H
O
W
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
S
L
I
D
E
S
H
O
W
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
S
L
I
D
E
S
H
O
W
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
m
a
n
a
g
e
r
_
f
a
q
[
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
C
A
T
E
G
O
R
Y
_
I
M
A
G
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
E
X
T
R
A
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
Q
U
E
S
T
I
O
N
_
M
E
D
I
A
C
E
N
T
R
E
_
E
X
T
R
A
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
j
r
_
g
e
t
t
e
x
t
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
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
E
X
T
R
A
S
'
,
 
'
_
J
O
M
R
E
S
_
F
A
Q
_
M
A
N
A
G
E
R
_
A
N
S
W
E
R
_
M
E
D
I
A
C
E
N
T
R
E
_
E
X
T
R
A
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
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

