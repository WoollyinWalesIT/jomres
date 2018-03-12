
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
0
5
0
1
f
i
l
e
_
u
p
l
o
a
d
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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
'
 
]
;

 
 
 
 
 
 
 
 
$
l
i
s
t
s
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
l
i
s
t
s
'
 
]
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
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
C
O
M
_
A
_
J
O
M
R
E
S
_
F
I
L
E
_
U
P
L
O
A
D
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
C
O
M
_
A
_
J
O
M
R
E
S
_
F
I
L
E
_
U
P
L
O
A
D
S
'
,
 
f
a
l
s
e
)
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
W
I
D
T
H
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
W
I
D
T
H
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
m
a
x
_
w
i
d
t
h
"
 
v
a
l
u
e
=
"
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
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
m
a
x
_
w
i
d
t
h
'
 
]
.
'
"
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
W
I
D
T
H
_
D
E
S
C
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
W
I
D
T
H
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
H
E
I
G
H
T
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
S
M
A
L
L
_
H
E
I
G
H
T
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
m
a
x
_
h
e
i
g
h
t
"
 
v
a
l
u
e
=
"
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
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
m
a
x
_
h
e
i
g
h
t
'
 
]
.
'
"
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
M
E
D
_
W
I
D
T
H
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
M
E
D
_
W
I
D
T
H
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
_
m
a
x
_
w
i
d
t
h
"
 
v
a
l
u
e
=
"
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
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
_
m
a
x
_
w
i
d
t
h
'
 
]
.
'
"
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
M
E
D
_
H
E
I
G
H
T
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
C
O
M
_
T
H
U
M
B
N
A
I
L
_
M
E
D
_
H
E
I
G
H
T
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
_
m
a
x
_
h
e
i
g
h
t
"
 
v
a
l
u
e
=
"
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
t
h
u
m
b
n
a
i
l
_
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
_
m
a
x
_
h
e
i
g
h
t
'
 
]
.
'
"
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
I
M
A
G
E
S
_
W
I
D
T
H
_
L
A
R
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
I
M
A
G
E
S
_
W
I
D
T
H
_
L
A
R
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
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
m
a
x
w
i
d
t
h
"
 
v
a
l
u
e
=
"
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
m
a
x
w
i
d
t
h
'
 
]
.
'
"
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
I
M
A
G
E
S
_
W
I
D
T
H
_
L
A
R
G
E
_
D
E
S
C
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
I
M
A
G
E
S
_
W
I
D
T
H
_
L
A
R
G
E
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
E
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
f
i
l
e
S
i
z
e
"
 
v
a
l
u
e
=
"
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
f
i
l
e
S
i
z
e
'
 
]
.
'
"
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
E
_
D
E
S
C
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
C
O
M
_
A
_
U
P
L
O
A
D
S
_
F
I
L
E
S
I
Z
E
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	

	
	
/
*
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
M
E
D
I
A
_
C
E
N
T
R
E
_
O
P
T
I
M
I
Z
E
_
I
M
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
M
E
D
I
A
_
C
E
N
T
R
E
_
O
P
T
I
M
I
Z
E
_
I
M
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
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
'
o
p
t
i
m
i
z
e
_
i
m
a
g
e
s
'
]
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
M
E
D
I
A
_
C
E
N
T
R
E
_
O
P
T
I
M
I
Z
E
_
I
M
A
G
E
S
_
D
E
S
C
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
M
E
D
I
A
_
C
E
N
T
R
E
_
O
P
T
I
M
I
Z
E
_
I
M
A
G
E
S
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;
 
*
/

	
	

	
	
/
/
p
l
u
g
i
n
s
 
c
a
n
 
a
d
d
 
o
p
t
i
o
n
s
 
t
o
 
t
h
i
s
 
t
a
b

	
	
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
r
i
g
g
e
r
E
v
e
n
t
(
'
1
0
5
2
4
'
,
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
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

