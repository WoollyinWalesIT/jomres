
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
0
0
0
5
x
_
c
r
e
a
t
e
_
m
i
s
c
_
c
o
m
m
o
n
_
s
t
r
i
n
g
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
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
c
o
m
m
o
n
_
t
e
m
p
l
a
t
e
_
s
t
r
i
n
g
s
'
)
;


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
N
E
X
T
'
 
]
 
=
 
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
D
A
T
A
T
A
B
L
E
S
_
S
N
E
X
T
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
N
E
X
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
R
E
V
'
 
]
 
=
 
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
D
A
T
A
T
A
B
L
E
S
_
S
P
R
E
V
I
O
U
S
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
P
R
E
V
I
O
U
S
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
F
I
R
S
T
'
 
]
 
=
 
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
D
A
T
A
T
A
B
L
E
S
_
S
F
I
R
S
T
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
F
I
R
S
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
L
A
S
T
'
 
]
 
=
 
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
D
A
T
A
T
A
B
L
E
S
_
S
L
A
S
T
'
,
 
'
D
A
T
A
T
A
B
L
E
S
_
S
L
A
S
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
C
A
N
C
E
L
'
 
]
 
=
 
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
C
O
M
M
O
N
_
C
A
N
C
E
L
'
,
 
'
C
O
M
M
O
N
_
C
A
N
C
E
L
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
S
U
B
M
I
T
'
 
]
 
=
 
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
C
O
M
M
O
N
_
S
U
B
M
I
T
'
,
 
'
C
O
M
M
O
N
_
S
U
B
M
I
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
S
A
V
E
'
 
]
 
=
 
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
C
O
M
M
O
N
_
S
A
V
E
'
,
 
'
C
O
M
M
O
N
_
S
A
V
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
D
E
L
E
T
E
'
 
]
 
=
 
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
C
O
M
M
O
N
_
D
E
L
E
T
E
'
,
 
'
C
O
M
M
O
N
_
D
E
L
E
T
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
R
E
T
U
R
N
'
 
]
 
=
 
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
C
O
M
M
O
N
_
R
E
T
U
R
N
'
,
 
'
C
O
M
M
O
N
_
R
E
T
U
R
N
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
C
L
O
S
E
'
 
]
 
=
 
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
C
O
M
M
O
N
_
C
L
O
S
E
'
,
 
'
C
O
M
M
O
N
_
C
L
O
S
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
B
A
C
K
'
 
]
 
=
 
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
C
O
M
M
O
N
_
B
A
C
K
'
,
 
'
C
O
M
M
O
N
_
B
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
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
H
O
M
E
'
 
]
 
=
 
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
C
O
M
M
O
N
_
H
O
M
E
'
,
 
'
C
O
M
M
O
N
_
H
O
M
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
N
E
W
'
 
]
 
=
 
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
C
O
M
M
O
N
_
N
E
W
'
,
 
'
C
O
M
M
O
N
_
N
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
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
S
E
N
D
'
 
]
 
=
 
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
C
O
M
M
O
N
_
S
E
N
D
'
,
 
'
C
O
M
M
O
N
_
S
E
N
D
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
A
C
T
I
O
N
'
 
]
 
=
 
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
C
O
M
M
O
N
_
A
C
T
I
O
N
'
,
 
'
C
O
M
M
O
N
_
A
C
T
I
O
N
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
V
I
E
W
'
 
]
 
=
 
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
C
O
M
M
O
N
_
V
I
E
W
'
,
 
'
C
O
M
M
O
N
_
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
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
R
I
N
T
'
 
]
 
=
 
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
C
O
M
M
O
N
_
P
R
I
N
T
'
,
 
'
C
O
M
M
O
N
_
P
R
I
N
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
E
D
I
T
'
 
]
 
=
 
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
C
O
M
M
O
N
_
E
D
I
T
'
,
 
'
C
O
M
M
O
N
_
E
D
I
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
C
O
P
Y
'
 
]
 
=
 
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
C
O
M
M
O
N
_
C
O
P
Y
'
,
 
'
C
O
M
M
O
N
_
C
O
P
Y
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
D
O
W
N
L
O
A
D
'
 
]
 
=
 
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
C
O
M
M
O
N
_
D
O
W
N
L
O
A
D
'
,
 
'
C
O
M
M
O
N
_
D
O
W
N
L
O
A
D
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
]
 
=
 
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
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
F
I
R
S
T
N
A
M
E
'
 
]
 
=
 
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
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
F
I
R
S
T
N
A
M
E
'
,
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
F
I
R
S
T
N
A
M
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
S
U
R
N
A
M
E
'
 
]
 
=
 
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
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
S
U
R
N
A
M
E
'
,
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
S
U
R
N
A
M
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
H
O
U
S
E
N
U
M
B
E
R
'
 
]
 
=
 
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
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
H
O
U
S
E
N
U
M
B
E
R
'
,
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
H
O
U
S
E
N
U
M
B
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
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
S
T
R
E
E
T
'
 
]
 
=
 
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
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
S
T
R
E
E
T
'
,
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
S
T
R
E
E
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
T
O
W
N
'
 
]
 
=
 
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
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
T
O
W
N
'
,
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
T
O
W
N
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
L
A
N
D
L
I
N
E
'
 
]
 
=
 
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
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
L
A
N
D
L
I
N
E
'
,
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
L
A
N
D
L
I
N
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
M
O
B
I
L
E
'
 
]
 
=
 
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
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
M
O
B
I
L
E
'
,
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
M
O
B
I
L
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
E
M
A
I
L
'
 
]
 
=
 
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
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
E
M
A
I
L
'
,
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
E
M
A
I
L
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
[
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
P
O
S
T
C
O
D
E
'
 
]
 
=
 
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
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
P
O
S
T
C
O
D
E
'
,
 
'
C
O
M
M
O
N
_
P
L
A
C
E
H
O
L
D
E
R
_
P
O
S
T
C
O
D
E
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
c
o
m
m
o
n
_
t
e
m
p
l
a
t
e
_
s
t
r
i
n
g
s
'
,
 
$
c
u
r
r
e
n
t
_
c
o
m
m
o
n
_
s
t
r
i
n
g
s
)
;

 
 
 
 
}


/
*
*

 
*
 
M
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
 
m
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
.

 
#

 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
m
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
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
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
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
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
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
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
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

 
 
 
 
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

