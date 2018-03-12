
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
3
1
a
m
a
z
o
n
_
s
3

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
o
p
t
i
o
n
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

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
u
s
-
e
a
s
t
-
1
'
,
 
'
U
S
 
E
a
s
t
 
(
N
.
 
V
i
r
g
i
n
i
a
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
u
s
-
e
a
s
t
-
2
'
,
 
'
U
S
 
E
a
s
t
 
(
O
h
i
o
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
u
s
-
w
e
s
t
-
1
'
,
 
'
U
S
 
W
e
s
t
 
(
N
.
 
C
a
l
i
f
o
r
n
i
a
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
u
s
-
w
e
s
t
-
2
'
,
 
'
U
S
 
W
e
s
t
 
(
O
r
e
g
o
n
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
c
a
-
c
e
n
t
r
a
l
-
1
'
,
 
'
C
a
n
a
d
a
 
(
C
e
n
t
r
a
l
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
a
p
-
s
o
u
t
h
-
1
'
,
 
'
A
s
i
a
 
P
a
c
i
f
i
c
 
(
M
u
m
b
a
i
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
a
p
-
n
o
r
t
h
e
a
s
t
-
2
'
,
 
'
A
s
i
a
 
P
a
c
i
f
i
c
 
(
S
e
o
u
l
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
a
p
-
s
o
u
t
h
e
a
s
t
-
1
'
,
 
'
A
s
i
a
 
P
a
c
i
f
i
c
 
(
S
i
n
g
a
p
o
r
e
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
a
p
-
s
o
u
t
h
e
a
s
t
-
2
'
,
 
'
A
s
i
a
 
P
a
c
i
f
i
c
 
(
S
y
d
n
e
y
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
a
p
-
n
o
r
t
h
e
a
s
t
-
1
'
,
 
'
A
s
i
a
 
P
a
c
i
f
i
c
 
(
T
o
k
y
o
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
e
u
-
c
e
n
t
r
a
l
-
1
'
,
 
'
E
U
 
(
F
r
a
n
k
f
u
r
t
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
e
u
-
w
e
s
t
-
1
'
,
 
'
E
U
 
(
I
r
e
l
a
n
d
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
e
u
-
w
e
s
t
-
2
'
,
 
'
E
U
 
(
L
o
n
d
o
n
)
'
 
)
;

	
	
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
s
a
-
e
a
s
t
-
1
'
,
 
'
S
o
u
t
h
 
A
m
e
r
i
c
a
 
(
S
Ã
£
o
 
P
a
u
l
o
)
'
 
)
;

	
	
$
s
3
_
r
e
g
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
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
 
$
o
p
t
i
o
n
s
,
 
'
c
f
g
_
a
m
a
z
o
n
_
s
3
_
r
e
g
i
o
n
'
,
'
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
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
m
a
z
o
n
_
s
3
_
r
e
g
i
o
n
'
 
]
)
;

	
	

	
	
$
y
e
s
n
o
 
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
y
e
s
n
o
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
0
'
,
 
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
"
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
M
R
_
N
O
"
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
M
R
_
N
O
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
y
e
s
n
o
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
 
'
1
'
,
 
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
"
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
M
R
_
Y
E
S
"
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
M
R
_
Y
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
a
c
t
i
v
e
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
 
$
y
e
s
n
o
,
 
'
c
f
g
_
a
m
a
z
o
n
_
s
3
_
a
c
t
i
v
e
'
,
'
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
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
m
a
z
o
n
_
s
3
_
a
c
t
i
v
e
'
 
]
)
;

	
	
$
r
e
m
o
v
e
_
l
o
c
a
l
_
c
o
p
i
e
s
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
 
$
y
e
s
n
o
,
 
'
c
f
g
_
a
m
a
z
o
n
_
s
3
_
r
e
m
o
v
e
_
l
o
c
a
l
_
c
o
p
i
e
s
'
,
'
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
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
m
a
z
o
n
_
s
3
_
r
e
m
o
v
e
_
l
o
c
a
l
_
c
o
p
i
e
s
'
 
]
)
;

	
	
$
u
s
e
_
t
l
s
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
 
$
y
e
s
n
o
,
 
'
c
f
g
_
a
m
a
z
o
n
_
s
3
_
u
s
e
_
t
l
s
'
,
'
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
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
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
m
a
z
o
n
_
s
3
_
u
s
e
_
t
l
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
i
n
s
e
r
t
H
e
a
d
i
n
g
(
'
A
m
a
z
o
n
 
S
3
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
S
T
A
T
U
S
_
A
C
T
I
V
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
S
T
A
T
U
S
_
A
C
T
I
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
a
c
t
i
v
e
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
S
3
_
A
C
T
I
V
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
S
3
_
A
C
T
I
V
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
'
K
e
y
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
a
m
a
z
o
n
_
s
3
_
k
e
y
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
a
m
a
z
o
n
_
s
3
_
k
e
y
'
 
]
.
'
"
 
/
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
'
S
e
c
r
e
t
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
a
m
a
z
o
n
_
s
3
_
s
e
c
r
e
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
a
m
a
z
o
n
_
s
3
_
s
e
c
r
e
t
'
 
]
.
'
"
 
/
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
'
R
e
g
i
o
n
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
m
i
d
d
l
e
(
$
s
3
_
r
e
g
i
o
n
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
'
B
u
c
k
e
t
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
a
m
a
z
o
n
_
s
3
_
b
u
c
k
e
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
a
m
a
z
o
n
_
s
3
_
b
u
c
k
e
t
'
 
]
.
'
"
 
/
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
L
O
U
D
F
R
O
N
T
_
D
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
C
L
O
U
D
F
R
O
N
T
_
D
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
h
t
t
p
s
:
/
/
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
a
m
a
z
o
n
_
c
l
o
u
d
f
r
o
n
t
_
d
o
m
a
i
n
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
a
m
a
z
o
n
_
c
l
o
u
d
f
r
o
n
t
_
d
o
m
a
i
n
'
 
]
.
'
"
 
/
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
L
O
U
D
F
R
O
N
T
_
D
M
A
I
N
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
L
O
U
D
F
R
O
N
T
_
D
M
A
I
N
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
'
S
S
L
/
T
L
S
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
m
i
d
d
l
e
(
$
u
s
e
_
t
l
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
S
3
_
S
S
L
T
L
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
S
3
_
S
S
L
T
L
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
'
R
e
m
o
v
e
 
f
i
l
e
s
 
f
r
o
m
 
s
e
r
v
e
r
?
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
m
i
d
d
l
e
(
$
r
e
m
o
v
e
_
l
o
c
a
l
_
c
o
p
i
e
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
s
e
t
r
i
g
h
t
(
'
O
n
c
e
 
a
 
f
i
l
e
 
h
a
s
 
b
e
e
n
 
c
o
p
i
e
d
 
t
o
 
A
m
a
z
o
n
 
S
3
,
 
r
e
m
o
v
e
 
i
t
 
f
r
o
m
 
t
h
e
 
l
o
c
a
l
 
s
e
r
v
e
r
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

