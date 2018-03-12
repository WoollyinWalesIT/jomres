
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
 
I
n
t
e
n
d
e
d
 
a
s
 
a
 
u
t
i
l
i
t
y
 
f
u
n
c
t
i
o
n
 
u
s
e
d
 
b
y
 
J
o
m
r
e
s
 
m
o
d
u
l
e
s
 
t
o
 
d
i
s
p
l
a
y
 
i
n
f
o
r
m
a
t
i
o
n
 
a
b
o
u
t
 
a
 
p
r
o
p
e
r
t
y
 
i
n
 
m
o
d
u
l
e
s

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
m
o
d
u
l
e
_
d
a
t
a
(
$
p
r
o
p
e
r
t
y
_
u
i
d
_
a
r
r
a
y
,
 
$
a
l
t
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
p
a
t
h
 
=
 
'
'
,
 
$
a
l
t
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
n
a
m
e
 
=
 
'
'
,
 
$
v
e
r
t
i
c
a
l
 
=
 
f
a
l
s
e
)

{

 
 
 
 
/
/
 
f
o
r
 
t
e
s
t
i
n
g

 
 
 
 
/
/
$
p
r
o
p
e
r
t
y
_
u
i
d
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
1
,
1
2
,
4
3
,
1
4
)
;

 
 
 
 
/
/
a
d
d
_
g
m
a
p
s
_
s
o
u
r
c
e
(
)
;

 
 
 
 
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


 
 
 
 
$
r
e
t
u
r
n
_
d
a
t
a
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
$
a
n
i
m
a
t
i
o
n
D
e
l
a
y
 
=
 
0
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
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
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
b
a
s
i
c
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
d
e
t
a
i
l
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
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
_
m
u
l
t
i
(
$
p
r
o
p
e
r
t
y
_
u
i
d
_
a
r
r
a
y
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
p
r
i
c
e
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
j
o
m
r
e
s
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
p
r
i
c
e
s
'
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
p
r
i
c
e
s
-
>
g
a
t
h
e
r
_
l
o
w
e
s
t
_
p
r
i
c
e
s
_
m
u
l
t
i
(
$
p
r
o
p
e
r
t
y
_
u
i
d
_
a
r
r
a
y
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
_
m
u
l
t
i
(
$
p
r
o
p
e
r
t
y
_
u
i
d
_
a
r
r
a
y
,
 
a
r
r
a
y
(
'
p
r
o
p
e
r
t
y
'
)
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
p
r
o
p
e
r
t
y
_
u
i
d
_
a
r
r
a
y
 
a
s
 
$
p
r
o
p
e
r
t
y
_
u
i
d
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
o
p
e
r
t
y
_
u
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
 
=
 
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
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
$
p
r
o
p
e
r
t
y
_
u
i
d
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
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
p
r
o
p
e
r
t
y
_
u
i
d
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
p
r
o
p
e
r
t
y
_
u
i
d
'
,
 
$
p
r
o
p
e
r
t
y
_
u
i
d
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
p
r
o
p
e
r
t
y
_
t
y
p
e
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
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
t
y
p
e
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
(
$
p
r
o
p
e
r
t
y
_
u
i
d
,
 
a
r
r
a
y
(
'
p
r
o
p
e
r
t
y
'
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
T
H
U
M
B
N
A
I
L
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
[
'
p
r
o
p
e
r
t
y
'
]
[
0
]
[
0
]
[
'
s
m
a
l
l
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
I
M
A
G
E
L
A
R
G
E
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
[
'
p
r
o
p
e
r
t
y
'
]
[
0
]
[
0
]
[
'
l
a
r
g
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
I
M
A
G
E
M
E
D
I
U
M
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
[
'
p
r
o
p
e
r
t
y
'
]
[
0
]
[
0
]
[
'
m
e
d
i
u
m
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
I
M
A
G
E
T
H
U
M
B
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
[
'
p
r
o
p
e
r
t
y
'
]
[
0
]
[
0
]
[
'
s
m
a
l
l
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
P
R
I
C
E
_
P
R
E
_
T
E
X
T
'
 
]
 
=
 
$
j
o
m
r
e
s
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
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
p
r
o
p
e
r
t
y
_
u
i
d
]
[
 
'
P
R
E
_
T
E
X
T
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
P
R
I
C
E
_
P
R
I
C
E
'
 
]
 
=
 
$
j
o
m
r
e
s
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
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
p
r
o
p
e
r
t
y
_
u
i
d
]
[
 
'
P
R
I
C
E
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
P
R
I
C
E
_
P
O
S
T
_
T
E
X
T
'
 
]
 
=
 
$
j
o
m
r
e
s
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
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
p
r
o
p
e
r
t
y
_
u
i
d
]
[
 
'
P
O
S
T
_
T
E
X
T
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
P
R
O
P
E
R
T
Y
_
U
I
D
'
 
]
 
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
R
A
N
D
O
M
_
I
D
E
N
T
I
F
I
E
R
'
 
]
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
0
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
L
I
V
E
_
S
I
T
E
'
 
]
 
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
l
i
v
e
_
s
i
t
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
M
O
R
E
I
N
F
O
R
M
A
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
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
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
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
,
 
$
e
d
i
t
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
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
Q
U
I
C
K
I
N
F
O
R
M
A
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
_
J
O
M
R
E
S
_
Q
U
I
C
K
_
I
N
F
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
Q
U
I
C
K
_
I
N
F
O
'
,
 
$
e
d
i
t
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
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
L
I
N
K
'
 
]
 
=
 
g
e
t
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
d
e
t
a
i
l
s
_
u
r
l
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
S
T
A
R
S
I
M
A
G
E
S
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
=
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
s
t
a
r
s
'
 
]
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
S
T
A
R
S
I
M
A
G
E
S
'
 
]
 
.
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
s
t
a
r
.
p
n
g
"
 
a
l
t
=
"
s
t
a
r
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
S
U
P
E
R
I
O
R
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
s
u
p
e
r
i
o
r
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
S
U
P
E
R
I
O
R
'
 
]
 
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
s
u
p
e
r
i
o
r
.
p
n
g
"
 
a
l
t
=
"
s
u
p
e
r
i
o
r
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
a
n
i
m
a
t
i
o
n
s

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
[
 
'
A
N
I
M
A
T
I
O
N
_
D
E
L
A
Y
'
 
]
 
=
 
$
a
n
i
m
a
t
i
o
n
D
e
l
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
a
n
i
m
a
t
i
o
n
D
e
l
a
y
 
=
 
$
a
n
i
m
a
t
i
o
n
D
e
l
a
y
 
+
 
3
0
0
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
$
p
r
o
p
e
r
t
y
_
d
a
t
a
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
l
t
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
p
a
t
h
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
$
a
l
t
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
p
a
t
h
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
[
 
'
r
o
o
m
_
t
y
p
e
s
'
 
]
)
 
&
&
 
!
e
m
p
t
y
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
[
 
'
r
o
o
m
_
t
y
p
e
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
o
m
_
t
y
p
e
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
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
[
 
'
r
o
o
m
_
t
y
p
e
s
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
 
]
)
 
&
&
 
!
e
m
p
t
y
(
$
c
u
r
r
e
n
t
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
d
e
t
a
i
l
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
o
m
_
f
e
a
t
u
r
e
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
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
l
t
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
n
a
m
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
$
a
l
t
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
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
 
&
&
 
j
o
m
r
e
s
_
b
o
o
t
s
t
r
a
p
_
v
e
r
s
i
o
n
(
)
 
=
=
 
'
3
'
 
&
&
 
$
v
e
r
t
i
c
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
b
a
s
i
c
_
m
o
d
u
l
e
_
o
u
t
p
u
t
_
v
e
r
t
i
c
a
l
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
b
a
s
i
c
_
m
o
d
u
l
e
_
o
u
t
p
u
t
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
[
 
'
t
e
m
p
l
a
t
e
'
 
]
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
[
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
]
[
 
'
d
a
t
a
'
 
]
 
=
 
$
p
r
o
p
e
r
t
y
_
d
a
t
a
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
;

}

