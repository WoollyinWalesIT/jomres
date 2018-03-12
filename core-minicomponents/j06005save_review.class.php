
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
6
0
0
5
s
a
v
e
_
r
e
v
i
e
w

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
_
G
E
T
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
_
u
i
d
'
 
]
)
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
u
i
d
 
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
 
=
 
(
i
n
t
)
 
$
_
P
O
S
T
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
_
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
1
 
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
r
a
t
i
n
g
_
1
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
2
 
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
r
a
t
i
n
g
_
2
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
3
 
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
r
a
t
i
n
g
_
3
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
4
 
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
r
a
t
i
n
g
_
4
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
5
 
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
r
a
t
i
n
g
_
5
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
6
 
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
r
a
t
i
n
g
_
6
'
,
 
0
)
;


 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
_
t
i
t
l
e
 
=
 
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
v
i
e
w
_
t
i
t
l
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
r
e
v
i
e
w
_
d
e
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
v
i
e
w
_
d
e
s
c
r
i
p
t
i
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
r
o
s
 
=
 
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
r
o
s
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
s
 
=
 
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
c
o
n
s
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
/
/
 
W
e
 
w
o
n
'
t
 
p
a
s
s
 
a
 
m
e
s
s
a
g
e
 
b
a
c
k
,
 
t
h
e
 
o
n
l
y
 
w
a
y
 
t
h
e
 
u
s
e
r
 
w
i
l
l
 
h
a
v
e
 
g
o
t
 
t
h
i
s
 
f
a
r
 
i
s
 
i
f
 
t
h
e
y
'
v
e
 
b
y
p
a
s
s
e
d
 
t
h
e
 
j
a
v
a
s
c
r
i
p
t
 
o
r
 
d
o
n
'
t
 
h
a
v
e
 
j
a
v
a
s
c
r
i
p
t
 
e
n
a
b
l
e
d
.

 
 
 
 
 
 
 
 
/
/
 
E
i
t
h
e
r
 
w
a
y
,
 
t
h
e
y
'
v
e
 
b
y
p
a
s
s
e
d
 
t
h
e
 
m
e
t
h
o
d
s
 
w
e
'
v
e
 
b
u
i
l
t
 
t
o
 
g
u
i
d
e
 
t
h
e
m
 
t
h
r
o
u
g
h
 
t
h
e
 
s
u
b
m
i
s
s
i
o
n
 
p
r
o
c
e
s
s
.
 
W
e
 
c
a
n
 
s
t
i
l
l
 
t
a
k
e
 
a
 
v
a
l
i
d
 
s
u
b
m
i
s
s
i
o
n
,
 
b
u
t
 
w
e
 
w
o
n
'
t
 
t
a
k
e
 
i
n
v
a
l
i
d
 
o
n
e
s
.

 
 
 
 
 
 
 
 
i
f
 
(
(
$
r
a
t
i
n
g
_
1
 
<
 
1
 
|
|
 
$
r
a
t
i
n
g
_
1
 
>
 
1
0
)
 
|
|
 
(
$
r
a
t
i
n
g
_
2
 
<
 
1
 
|
|
 
$
r
a
t
i
n
g
_
2
 
>
 
1
0
)
 
|
|
 
(
$
r
a
t
i
n
g
_
3
 
<
 
1
 
|
|
 
$
r
a
t
i
n
g
_
3
 
>
 
1
0
)
 
|
|
 
(
$
r
a
t
i
n
g
_
4
 
<
 
1
 
|
|
 
$
r
a
t
i
n
g
_
4
 
>
 
1
0
)
 
|
|
 
(
$
r
a
t
i
n
g
_
5
 
<
 
1
 
|
|
 
$
r
a
t
i
n
g
_
5
 
>
 
1
0
)
 
|
|
 
(
$
r
a
t
i
n
g
_
6
 
<
 
1
 
|
|
 
$
r
a
t
i
n
g
_
6
 
>
 
1
0
)
 
|
|
 
$
r
e
v
i
e
w
_
t
i
t
l
e
 
=
=
 
'
'
 
|
|
 
$
r
e
v
i
e
w
_
d
e
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
=
 
'
'
 
|
|
 
$
p
r
o
s
 
=
=
 
'
'
 
|
|
 
$
c
o
n
s
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
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
.
'
&
t
a
s
k
=
a
d
d
_
r
e
v
i
e
w
&
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
=
'
.
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
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
_
h
e
a
d
e
r
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
u
s
e
_
r
e
v
i
e
w
s
'
 
]
 
=
=
 
'
1
'
 
&
&
 
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
)
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
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
o
m
r
e
s
_
r
e
v
i
e
w
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
R
e
v
i
e
w
s
 
=
 
n
e
w
 
j
o
m
r
e
s
_
r
e
v
i
e
w
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
R
e
v
i
e
w
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
u
i
d
 
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
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
_
t
h
i
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
 
=
 
$
R
e
v
i
e
w
s
-
>
t
h
i
s
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
_
t
h
i
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
(
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
_
u
s
e
r
_
c
a
n
_
r
e
v
i
e
w
_
t
h
i
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
v
e
r
a
l
l
_
r
a
t
i
n
g
 
=
 
(
i
n
t
)
 
(
$
r
a
t
i
n
g
_
1
 
+
 
$
r
a
t
i
n
g
_
2
 
+
 
$
r
a
t
i
n
g
_
3
 
+
 
$
r
a
t
i
n
g
_
4
 
+
 
$
r
a
t
i
n
g
_
5
 
+
 
$
r
a
t
i
n
g
_
6
)
 
/
 
6
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
i
n
g
_
i
d
 
=
 
$
R
e
v
i
e
w
s
-
>
s
a
v
e
_
r
e
v
i
e
w
(
$
o
v
e
r
a
l
l
_
r
a
t
i
n
g
,
 
$
r
e
v
i
e
w
_
t
i
t
l
e
,
 
$
r
e
v
i
e
w
_
d
e
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
 
$
p
r
o
s
,
 
$
c
o
n
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
R
e
v
i
e
w
s
-
>
s
a
v
e
_
r
a
t
i
n
g
_
d
e
t
a
i
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
,
 
$
r
a
t
i
n
g
_
i
d
,
 
$
r
a
t
i
n
g
_
1
,
 
$
r
a
t
i
n
g
_
2
,
 
$
r
a
t
i
n
g
_
3
,
 
$
r
a
t
i
n
g
_
4
,
 
$
r
a
t
i
n
g
_
5
,
 
$
r
a
t
i
n
g
_
6
)
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
a
u
t
o
p
u
b
l
i
s
h
_
r
e
v
i
e
w
s
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
t
h
a
n
k
s
 
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
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
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
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
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
,
 
f
a
l
s
e
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
h
a
n
k
s
 
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
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
R
E
V
I
E
W
_
M
O
D
E
R
A
T
E
D
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
R
E
V
I
E
W
S
_
T
H
A
N
K
S
_
F
O
R
_
R
E
V
I
E
W
_
M
O
D
E
R
A
T
E
D
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
a
v
e
M
e
s
s
a
g
e
 
=
 
$
t
h
a
n
k
s
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
s
s
a
g
i
n
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
m
e
s
s
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
s
s
a
g
i
n
g
-
>
s
e
t
_
m
e
s
s
a
g
e
(
$
s
a
v
e
M
e
s
s
a
g
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
n
a
m
e
 
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
N
a
m
e
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
s
u
b
j
e
c
t
 
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
J
O
M
R
E
S
_
N
E
W
R
E
V
I
E
W
_
S
U
B
J
E
C
T
'
,
 
'
J
O
M
R
E
S
_
N
E
W
R
E
V
I
E
W
_
S
U
B
J
E
C
T
'
,
 
f
a
l
s
e
)
.
'
 
'
.
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
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
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
J
O
M
R
E
S
_
N
E
W
R
E
V
I
E
W
_
M
E
S
S
A
G
E
'
,
 
'
J
O
M
R
E
S
_
N
E
W
R
E
V
I
E
W
_
M
E
S
S
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
.
'
 
'
.
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
n
a
m
e
.
'
 
 
'
.
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
v
i
e
w
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
r
e
v
i
e
w
s
&
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
=
'
.
(
i
n
t
)
 
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
.
'
 
<
b
r
/
>
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
e
n
d
A
d
m
i
n
E
m
a
i
l
(
$
s
u
b
j
e
c
t
,
 
$
m
e
s
s
a
g
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
,
 
'
'
)
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
R
E
V
I
E
W
S
_
C
A
N
N
O
T
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
R
E
V
I
E
W
S
_
C
A
N
N
O
T
R
E
V
I
E
W
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}

