
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


g
l
o
b
a
l
 
$
r
a
1
,
 
$
r
a
2
,
 
$
c
o
n
v
e
r
t
e
d
R
A
s
,
 
$
l
e
s
s
T
h
a
n
s
;
 
/
/
 
g
l
o
b
a
l
e
d
 
s
o
 
t
h
a
t
 
w
e
 
d
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
 
i
n
i
t
i
a
l
i
s
e
 
t
h
e
m
 
e
v
e
r
y
 
t
i
m
e


/
/
g
l
o
b
a
l
 
$
R
;


/
/
 
S
t
u
f
f
 
w
e
 
w
a
n
t
 
t
o
 
f
i
l
t
e
r
 
o
u
t
 
o
f
 
i
n
p
u
t
s
.

$
r
a
1
 
=
 
a
r
r
a
y
(
'
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
'
,
 
'
v
b
s
c
r
i
p
t
'
,
 
'
e
x
p
r
e
s
s
i
o
n
'
,
 
'
a
p
p
l
e
t
'
,
 
'
m
e
t
a
'
,
 
'
x
m
l
'
,
 
'
b
l
i
n
k
'
,
 
'
<
l
i
n
k
'
,
 
'
<
s
t
y
l
e
'
,
 
'
s
c
r
i
p
t
'
,
 
'
e
m
b
e
d
'
,
 
'
o
b
j
e
c
t
'
,
 
'
i
f
r
a
m
e
'
,
 
'
f
r
a
m
e
'
,
 
'
f
r
a
m
e
s
e
t
'
,
 
'
i
l
a
y
e
r
'
,
 
'
l
a
y
e
r
'
,
 
'
b
g
s
o
u
n
d
'
,
 
'
<
t
i
t
l
e
'
,
 
'
b
a
s
e
'
,
 
'
m
o
c
h
a
'
,
 
'
l
i
v
e
s
c
r
i
p
t
'
,
 
'
@
i
m
p
o
r
t
'
,
 
'
<
h
t
m
l
'
,
 
'
<
b
o
d
y
'
)
;

$
r
a
2
 
=
 
a
r
r
a
y
(
'
o
n
a
b
o
r
t
'
,
 
'
o
n
a
c
t
i
v
a
t
e
'
,
 
'
o
n
a
f
t
e
r
p
r
i
n
t
'
,
 
'
o
n
a
f
t
e
r
u
p
d
a
t
e
'
,
 
'
o
n
b
e
f
o
r
e
a
c
t
i
v
a
t
e
'
,
 
'
o
n
b
e
f
o
r
e
c
o
p
y
'
,
 
'
o
n
b
e
f
o
r
e
c
u
t
'
,
 
'
o
n
b
e
f
o
r
e
d
e
a
c
t
i
v
a
t
e
'
,
 
'
o
n
b
e
f
o
r
e
e
d
i
t
f
o
c
u
s
'
,
 
'
o
n
b
e
f
o
r
e
p
a
s
t
e
'
,
 
'
o
n
b
e
f
o
r
e
p
r
i
n
t
'
,
 
'
o
n
b
e
f
o
r
e
u
n
l
o
a
d
'
,
 
'
o
n
b
e
f
o
r
e
u
p
d
a
t
e
'
,
 
'
o
n
b
l
u
r
'
,
 
'
o
n
b
o
u
n
c
e
'
,
 
'
o
n
c
e
l
l
c
h
a
n
g
e
'
,
 
'
o
n
c
h
a
n
g
e
'
,
 
'
o
n
c
l
i
c
k
'
,
 
'
o
n
c
o
n
t
e
x
t
m
e
n
u
'
,
 
'
o
n
c
o
n
t
r
o
l
s
e
l
e
c
t
'
,
 
'
o
n
c
o
p
y
'
,
 
'
o
n
c
u
t
'
,
 
'
o
n
d
a
t
a
a
v
a
i
l
a
b
l
e
'
,
 
'
o
n
d
a
t
a
s
e
t
c
h
a
n
g
e
d
'
,
 
'
o
n
d
a
t
a
s
e
t
c
o
m
p
l
e
t
e
'
,
 
'
o
n
d
b
l
c
l
i
c
k
'
,
 
'
o
n
d
e
a
c
t
i
v
a
t
e
'
,
 
'
o
n
d
r
a
g
'
,
 
'
o
n
d
r
a
g
e
n
d
'
,
 
'
o
n
d
r
a
g
e
n
t
e
r
'
,
 
'
o
n
d
r
a
g
l
e
a
v
e
'
,
 
'
o
n
d
r
a
g
o
v
e
r
'
,
 
'
o
n
d
r
a
g
s
t
a
r
t
'
,
 
'
o
n
d
r
o
p
'
,
 
'
o
n
e
r
r
o
r
'
,
 
'
o
n
e
r
r
o
r
u
p
d
a
t
e
'
,
 
'
o
n
f
i
l
t
e
r
c
h
a
n
g
e
'
,
 
'
o
n
f
i
n
i
s
h
'
,
 
'
o
n
f
o
c
u
s
'
,
 
'
o
n
f
o
c
u
s
i
n
'
,
 
'
o
n
f
o
c
u
s
o
u
t
'
,
 
'
o
n
h
e
l
p
'
,
 
'
o
n
k
e
y
d
o
w
n
'
,
 
'
o
n
k
e
y
p
r
e
s
s
'
,
 
'
o
n
k
e
y
u
p
'
,
 
'
o
n
l
a
y
o
u
t
c
o
m
p
l
e
t
e
'
,
 
'
o
n
l
o
a
d
'
,
 
'
o
n
l
o
s
e
c
a
p
t
u
r
e
'
,
 
'
o
n
m
o
u
s
e
d
o
w
n
'
,
 
'
o
n
m
o
u
s
e
e
n
t
e
r
'
,
 
'
o
n
m
o
u
s
e
l
e
a
v
e
'
,
 
'
o
n
m
o
u
s
e
m
o
v
e
'
,
 
'
o
n
m
o
u
s
e
o
u
t
'
,
 
'
o
n
m
o
u
s
e
o
v
e
r
'
,
 
'
o
n
m
o
u
s
e
u
p
'
,
 
'
o
n
m
o
u
s
e
w
h
e
e
l
'
,
 
'
o
n
m
o
v
e
'
,
 
'
o
n
m
o
v
e
e
n
d
'
,
 
'
o
n
m
o
v
e
s
t
a
r
t
'
,
 
'
o
n
p
a
s
t
e
'
,
 
'
o
n
p
r
o
p
e
r
t
y
c
h
a
n
g
e
'
,
 
'
o
n
r
e
a
d
y
s
t
a
t
e
c
h
a
n
g
e
'
,
 
'
o
n
r
e
s
e
t
'
,
 
'
o
n
r
e
s
i
z
e
'
,
 
'
o
n
r
e
s
i
z
e
e
n
d
'
,
 
'
o
n
r
e
s
i
z
e
s
t
a
r
t
'
,
 
'
o
n
r
o
w
e
n
t
e
r
'
,
 
'
o
n
r
o
w
e
x
i
t
'
,
 
'
o
n
r
o
w
s
d
e
l
e
t
e
'
,
 
'
o
n
r
o
w
s
i
n
s
e
r
t
e
d
'
,
 
'
o
n
s
c
r
o
l
l
'
,
 
'
o
n
s
e
l
e
c
t
'
,
 
'
o
n
s
e
l
e
c
t
i
o
n
c
h
a
n
g
e
'
,
 
'
o
n
s
e
l
e
c
t
s
t
a
r
t
'
,
 
'
o
n
s
t
a
r
t
'
,
 
'
o
n
s
t
o
p
'
,
 
'
o
n
s
u
b
m
i
t
'
,
 
'
o
n
u
n
l
o
a
d
'
,
 
'
f
r
o
m
c
h
a
r
c
o
d
e
'
,
 
'
;
a
l
e
r
t
'
,
 
'
:
a
l
e
r
t
'
,
 
'
f
s
c
o
m
m
a
n
d
'
,
 
'
o
n
b
e
g
i
n
'
,
 
'
o
n
d
r
a
g
d
r
o
p
'
,
 
'
o
n
e
n
d
'
,
 
'
o
n
m
e
d
i
a
c
o
m
p
l
e
t
e
'
,
 
'
o
n
m
e
d
i
a
e
r
r
o
r
'
,
 
'
o
n
o
u
t
o
f
s
y
n
c
'
,
 
'
o
n
p
a
u
s
e
'
,
 
'
o
n
p
r
o
g
r
e
s
s
'
,
 
'
o
n
r
e
p
e
a
t
'
,
 
'
o
n
r
e
s
u
m
e
'
,
 
'
o
n
r
e
v
e
r
s
e
'
,
 
'
o
n
r
o
w
s
e
n
t
e
r
'
,
 
'
o
n
r
o
w
d
e
l
e
t
e
'
,
 
'
o
n
r
o
w
i
n
s
e
r
t
e
d
'
,
 
'
o
n
s
c
r
o
l
l
b
y
'
,
 
'
o
n
s
e
e
k
'
,
 
'
o
n
s
y
n
c
r
e
s
t
o
r
e
d
'
,
 
'
o
n
t
i
m
e
e
r
r
o
r
'
,
 
'
o
n
t
r
a
c
k
c
h
a
n
g
e
'
,
 
'
o
n
u
r
l
f
l
i
p
'
,
 
'
s
e
e
k
s
e
g
m
e
n
t
t
i
m
e
'
,
 
'
s
c
r
i
p
t
l
e
t
'
)
;

$
l
e
s
s
T
h
a
n
s
 
=
 
a
r
r
a
y
(
'
%
3
C
'
,
 
'
&
l
t
'
,
 
'
&
l
t
;
'
,
 
'
&
L
T
'
,
 
'
&
L
T
;
'
,
 
'
&
#
6
0
'
,
 
'
&
#
0
6
0
'
,
 
'
&
#
0
0
6
0
'
,
 
'
&
#
0
0
0
6
0
'
,
 
'
&
#
0
0
0
0
6
0
'
,
 
'
&
#
0
0
0
0
0
6
0
'
,
 
'
&
#
6
0
;
'
,
 
'
&
#
0
6
0
;
'
,
 
'
&
#
0
0
6
0
;
'
,
 
'
&
#
0
0
0
6
0
;
'
,
 
'
&
#
0
0
0
0
6
0
;
'
,
 
'
&
#
0
0
0
0
0
6
0
;
'
,
 
'
&
#
x
3
c
'
,
 
'
&
#
x
0
3
c
'
,
 
'
&
#
x
0
0
3
c
'
,
 
'
&
#
x
0
0
0
3
c
'
,
 
'
&
#
x
0
0
0
0
3
c
'
,
 
'
&
#
x
0
0
0
0
0
3
c
'
,
 
'
&
#
x
3
c
;
'
,
 
'
&
#
x
0
3
c
;
'
,
 
'
&
#
x
0
0
3
c
;
'
,
 
'
&
#
x
0
0
0
3
c
;
'
,
 
'
&
#
x
0
0
0
0
3
c
;
'
,
 
'
&
#
x
0
0
0
0
0
3
c
;
'
,
 
'
&
#
X
3
c
'
,
 
'
&
#
X
0
3
c
'
,
 
'
&
#
X
0
0
3
c
'
,
 
'
&
#
X
0
0
0
3
c
'
,
 
'
&
#
X
0
0
0
0
3
c
'
,
 
'
&
#
X
0
0
0
0
0
3
c
'
,
 
'
&
#
X
3
c
;
'
,
 
'
&
#
X
0
3
c
;
'
,
 
'
&
#
X
0
0
3
c
;
'
,
 
'
&
#
X
0
0
0
3
c
;
'
,
 
'
&
#
X
0
0
0
0
3
c
;
'
,
 
'
&
#
X
0
0
0
0
0
3
c
;
'
,
 
'
&
#
x
3
C
'
,
 
'
&
#
x
0
3
C
'
,
 
'
&
#
x
0
0
3
C
'
,
 
'
&
#
x
0
0
0
3
C
'
,
 
'
&
#
x
0
0
0
0
3
C
'
,
 
'
&
#
x
0
0
0
0
0
3
C
'
,
 
'
&
#
x
3
C
;
'
,
 
'
&
#
x
0
3
C
;
'
,
 
'
&
#
x
0
0
3
C
;
'
,
 
'
&
#
x
0
0
0
3
C
;
'
,
 
'
&
#
x
0
0
0
0
3
C
;
'
,
 
'
&
#
x
0
0
0
0
0
3
C
;
'
,
 
'
&
#
X
3
C
'
,
 
'
&
#
X
0
3
C
'
,
 
'
&
#
X
0
0
3
C
'
,
 
'
&
#
X
0
0
0
3
C
'
,
 
'
&
#
X
0
0
0
0
3
C
'
,
 
'
&
#
X
0
0
0
0
0
3
C
'
,
 
'
&
#
X
3
C
;
'
,
 
'
&
#
X
0
3
C
;
'
,
 
'
&
#
X
0
0
3
C
;
'
,
 
'
&
#
X
0
0
0
3
C
;
'
,
 
'
&
#
X
0
0
0
0
3
C
;
'
,
 
'
&
#
X
0
0
0
0
0
3
C
;
'
,
 
'
\
x
3
c
'
,
 
'
\
x
3
C
'
,
 
'
\
u
0
0
3
c
'
,
 
'
\
u
0
0
3
C
'
)
;

$
c
o
n
v
e
r
t
e
d
R
A
s
 
=
 
i
n
i
t
R
e
m
o
v
e
X
S
S
(
$
r
a
1
,
 
$
r
a
2
)
;


f
u
n
c
t
i
o
n
 
i
n
i
t
R
e
m
o
v
e
X
S
S
(
$
r
a
1
,
 
$
r
a
2
)

{

 
 
 
 
$
m
e
r
g
e
d
 
=
 
a
r
r
a
y
_
m
e
r
g
e
(
$
r
a
1
,
 
$
r
a
2
)
;

 
 
 
 
$
b
a
s
e
6
4
 
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
m
e
r
g
e
d
 
a
s
 
$
m
)
 
{

 
 
 
 
 
 
 
 
$
b
a
s
e
6
4
[
 
]
 
=
 
b
a
s
e
6
4
_
e
n
c
o
d
e
(
$
m
)
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
$
b
a
s
e
6
4
)
;

}


f
u
n
c
t
i
o
n
 
R
e
m
o
v
e
X
S
S
(
$
v
a
l
)

{

 
 
 
 
g
l
o
b
a
l
 
$
r
a
1
,
 
$
r
a
2
,
 
$
c
o
n
v
e
r
t
e
d
R
A
s
,
 
$
l
e
s
s
T
h
a
n
s
;

 
 
 
 
/
/
$
v
a
l
=
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
)
;
 
 
/
/
 
D
i
s
a
b
l
e
d
 
a
s
 
i
t
 
w
o
u
l
d
n
'
t
 
s
a
v
e
 
w
i
n
d
o
w
s
 
p
a
t
h
s

 
 
 
 
/
/
 
F
i
r
s
t
 
l
e
t
'
s
 
 
r
e
p
l
a
c
e
 
a
l
l
 
t
h
e
 
p
o
s
s
i
b
l
e
 
l
e
s
s
 
t
h
a
n
 
s
y
m
b
o
l
s
 
w
i
t
h
 
t
h
e
 
r
e
a
l
 
t
h
i
n
g
 
<

 
 
 
 
$
v
a
l
 
=
 
s
t
r
_
i
r
e
p
l
a
c
e
(
$
l
e
s
s
T
h
a
n
s
,
 
'
'
,
 
$
v
a
l
)
;

 
 
 
 
/
/
 
r
e
m
o
v
e
 
a
l
l
 
n
o
n
-
p
r
i
n
t
a
b
l
e
 
c
h
a
r
a
c
t
e
r
s
.
 
C
R
(
0
a
)
 
a
n
d
 
L
F
(
0
b
)
 
a
n
d
 
T
A
B
(
9
)
 
a
r
e
 
a
l
l
o
w
e
d

 
 
 
 
/
/
 
t
h
i
s
 
p
r
e
v
e
n
t
s
 
s
o
m
e
 
c
h
a
r
a
c
t
e
r
 
r
e
-
s
p
a
c
i
n
g
 
s
u
c
h
 
a
s
 
<
j
a
v
a
\
0
s
c
r
i
p
t
>

 
 
 
 
/
/
 
n
o
t
e
 
t
h
a
t
 
y
o
u
 
h
a
v
e
 
t
o
 
h
a
n
d
l
e
 
s
p
l
i
t
s
 
w
i
t
h
 
\
n
,
 
\
r
,
 
a
n
d
 
\
t
 
l
a
t
e
r
 
s
i
n
c
e
 
t
h
e
y
 
*
a
r
e
*
 
a
l
l
o
w
e
d
 
i
n
 
s
o
m
e
 
i
n
p
u
t
s

 
 
 
 
$
v
a
l
 
=
 
p
r
e
g
_
r
e
p
l
a
c
e
(
'
/
(
[
\
x
0
0
-
\
x
0
8
]
[
\
x
0
b
-
\
x
0
c
]
[
\
x
0
e
-
\
x
2
0
]
)
/
'
,
 
'
'
,
 
$
v
a
l
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
c
o
n
v
e
r
t
e
d
R
A
s
 
a
s
 
$
n
a
u
g
h
t
y
)
 
{

 
 
 
 
 
 
 
 
$
v
a
l
 
=
 
s
t
r
_
i
r
e
p
l
a
c
e
(
$
n
a
u
g
h
t
y
,
 
'
'
,
 
$
v
a
l
)
;

 
 
 
 
}


 
 
 
 
/
/
 
V
i
n
c
e
'
s
 
a
d
d
i
t
i
o
n
s

 
 
 
 
$
v
i
n
c
e
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
v
i
n
c
e
s
[
 
]
 
=
 
'
&
#
x
0
A
;
'
;
 
/
/
 
 
<
I
M
G
 
S
R
C
=
"
j
a
v
&
#
x
0
A
;
a
s
c
r
i
p
t
:
a
l
e
r
t
(
'
X
S
S
'
)
;
"
>
 
 
E
m
b
e
d
e
d
 
n
e
w
l
i
n
e
 
t
o
 
b
r
e
a
k
 
u
p
 
X
S
S
.

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
&
#
x
0
D
;
'
;
 
/
/
 
<
I
M
G
 
S
R
C
=
"
j
a
v
&
#
x
0
D
;
a
s
c
r
i
p
t
:
a
l
e
r
t
(
'
X
S
S
'
)
;
"
>
 
 
E
m
b
e
d
d
e
d
 
c
a
r
r
i
a
g
e
 
r
e
t
u
r
n
 
t
o
 
b
r
e
a
k
 
u
p
 
X
S
S

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
&
#
1
4
;
'
;
 
/
/
 
 
<
I
M
G
 
S
R
C
=
"
 
&
#
1
4
;
 
 
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
:
a
l
e
r
t
(
'
X
S
S
'
)
;
"
>
 
S
p
a
c
e
s
 
a
n
d
 
m
e
t
a
 
c
h
a
r
s
 
b
e
f
o
r
e
 
t
h
e
 
J
a
v
a
S
c
r
i
p
t
 
i
n
 
i
m
a
g
e
s
 
f
o
r
 
X
S
S

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
%
5
3
%
4
3
%
5
2
%
4
9
%
5
0
%
5
4
'
;
 
/
/
 
U
R
L
:

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
&
#
x
5
3
;
&
#
x
4
3
;
&
#
x
5
2
;
&
#
x
4
9
;
&
#
x
5
0
;
&
#
x
5
4
;
'
;
 
/
/
 
H
T
M
L
 
(
w
i
t
h
 
s
e
m
i
c
o
l
o
n
s
)
:

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
&
#
8
3
&
#
6
7
&
#
8
2
&
#
7
3
&
#
8
0
&
#
8
4
'
;
 
/
/
 
H
T
M
L
 
(
w
i
t
h
o
u
t
 
s
e
m
i
c
o
l
o
n
s
)
:

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
&
#
x
2
6
;
&
#
x
2
3
;
&
#
x
7
8
;
&
#
x
3
6
;
&
#
x
4
1
;
&
#
x
3
B
;
&
#
x
2
6
;
&
#
x
2
3
;
&
#
x
7
8
;
&
#
x
3
6
;
&
#
x
3
1
;
&
#
x
3
B
;
&
#
x
2
6
;
&
#
x
2
3
;
&
#
x
7
8
;
&
#
x
3
7
;
&
#
x
3
6
;
&
#
x
3
B
;
&
#
x
2
6
;
&
#
x
2
3
;
&
#
x
7
8
;
&
#
x
3
6
;
&
#
x
3
1
;
&
#
x
3
B
;
&
#
x
2
6
;
&
#
x
2
3
;
&
#
x
7
8
;
&
#
x
3
7
;
&
#
x
3
3
;
&
#
x
3
B
;
&
#
x
2
6
;
&
#
x
2
3
;
&
#
x
7
8
;
&
#
x
3
6
;
&
#
x
3
3
;
&
#
x
3
B
;
&
#
x
2
6
;
&
#
x
2
3
;
&
#
x
7
8
;
&
#
x
3
7
;
&
#
x
3
2
;
&
#
x
3
B
;
&
#
x
2
6
;
&
#
x
2
3
;
&
#
x
7
8
;
&
#
x
3
6
;
&
#
x
3
9
;
&
#
x
3
B
;
&
#
x
2
6
;
&
#
x
2
3
;
&
#
x
7
8
;
&
#
x
3
7
;
&
#
x
3
0
;
&
#
x
3
B
;
&
#
x
2
6
;
&
#
x
2
3
;
&
#
x
7
8
;
&
#
x
3
7
;
&
#
x
3
4
;
&
#
x
3
B
;
'
;
 
/
/
 
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
 
h
e
x
 
*
 
2


 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
S
I
Z
E
=
"
&
{
'
;
 
/
/
 
<
B
R
 
S
I
Z
E
=
"
&
{
a
l
e
r
t
(
'
X
S
S
'
)
}
"
>
	
&
 
J
a
v
a
S
c
r
i
p
t
 
i
n
c
l
u
d
e
s
 
(
w
o
r
k
s
 
i
n
 
N
e
t
s
c
a
p
e
 
4
.
x
)
:

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
/
*
'
;
 
/
/
 
<
I
M
G
 
S
T
Y
L
E
=
"
x
s
s
:
e
x
p
r
/
*
X
S
S
*
/
e
s
s
i
o
n
(
a
l
e
r
t
(
'
X
S
S
'
)
)
"
>
 
S
T
Y
L
E
 
a
t
t
r
i
b
u
t
e
 
u
s
i
n
g
 
a
 
c
o
m
m
e
n
t
 
t
o
 
b
r
e
a
k
 
u
p
 
e
x
p
r
e
s
s
i
o
n

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
*
/
'
;
 
/
/
 
<
I
M
G
 
S
T
Y
L
E
=
"
x
s
s
:
e
x
p
r
/
*
X
S
S
*
/
e
s
s
i
o
n
(
a
l
e
r
t
(
'
X
S
S
'
)
)
"
>
 
S
T
Y
L
E
 
a
t
t
r
i
b
u
t
e
 
u
s
i
n
g
 
a
 
c
o
m
m
e
n
t
 
t
o
 
b
r
e
a
k
 
u
p
 
e
x
p
r
e
s
s
i
o
n

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
<
!
-
-
'
;
 
/
/
 
<
I
M
G
 
S
T
Y
L
E
=
"
x
s
s
:
e
x
p
r
/
*
X
S
S
*
/
e
s
s
i
o
n
(
a
l
e
r
t
(
'
X
S
S
'
)
)
"
>
 
S
T
Y
L
E
 
a
t
t
r
i
b
u
t
e
 
u
s
i
n
g
 
a
 
c
o
m
m
e
n
t
 
t
o
 
b
r
e
a
k
 
u
p
 
e
x
p
r
e
s
s
i
o
n

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
-
-
>
'
;
 
/
/
 
<
I
M
G
 
S
T
Y
L
E
=
"
x
s
s
:
e
x
p
r
/
*
X
S
S
*
/
e
s
s
i
o
n
(
a
l
e
r
t
(
'
X
S
S
'
)
)
"
>
 
S
T
Y
L
E
 
a
t
t
r
i
b
u
t
e
 
u
s
i
n
g
 
a
 
c
o
m
m
e
n
t
 
t
o
 
b
r
e
a
k
 
u
p
 
e
x
p
r
e
s
s
i
o
n

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
<
!
-
-
 
-
-
>
'
;
 
/
/
 
<
X
M
L
 
I
D
=
"
x
s
s
"
>
<
I
>
<
B
>
&
l
t
;
I
M
G
 
S
R
C
=
"
j
a
v
a
s
<
!
-
-
 
-
-
>
c
r
i
p
t
:
a
l
e
r
t
(
'
X
S
S
'
)
"
 
 
d
a
t
a
 
i
s
l
a
n
d
 
w
i
t
h
 
c
o
m
m
e
n
t
 
o
b
f
u
s
c
a
t
i
o
n

 
 
 
 
/
/
$
v
i
n
c
e
s
[
]
=
'
ï
¿
½
?
'
;
 
/
/
 
U
S
-
A
S
C
I
I
 
e
n
c
o
d
i
n
g
 
(
f
o
u
n
d
 
b
y
 
K
u
r
t
 
H
u
w
i
g
)
.
 
T
h
i
s
 
u
s
e
s
 
m
a
l
f
o
r
m
e
d
 
A
S
C
I
I
 
e
n
c
o
d
i
n
g
 
w
i
t
h
 
7
 
b
i
t
s
 
i
n
s
t
e
a
d
 
o
f
 
8
.
	
/
/
b
o
r
k
s
 
a
p
a
c
h
e

 
 
 
 
/
/
$
v
i
n
c
e
s
[
]
=
'
Â
¥
'
;
 
/
/
U
S
-
A
S
C
I
I
 
e
n
c
o
d
i
n
g
 
(
f
o
u
n
d
 
b
y
 
K
u
r
t
 
H
u
w
i
g
)
.
 
T
h
i
s
 
u
s
e
s
 
m
a
l
f
o
r
m
e
d
 
A
S
C
I
I
 
e
n
c
o
d
i
n
g
 
w
i
t
h
 
7
 
b
i
t
s
 
i
n
s
t
e
a
d
 
o
f
 
8
.
	
/
/
b
o
r
k
s
 
a
p
a
c
h
e

 
 
 
 
/
/
$
v
i
n
c
e
s
[
]
=
'
Ã
³
'
;
 
/
/
 
U
S
-
A
S
C
I
I
 
e
n
c
o
d
i
n
g
 
(
f
o
u
n
d
 
b
y
 
K
u
r
t
 
H
u
w
i
g
)
.
 
T
h
i
s
 
u
s
e
s
 
m
a
l
f
o
r
m
e
d
 
A
S
C
I
I
 
e
n
c
o
d
i
n
g
 
w
i
t
h
 
7
 
b
i
t
s
 
i
n
s
t
e
a
d
 
o
f
 
8
.
	
 
/
/
b
o
r
k
s
 
a
p
a
c
h
e

 
 
 
 
$
v
i
n
c
e
s
[
 
]
 
=
 
'
?
_
u
r
l
'
;
 
/
/
 
 
o
p
e
n
 
r
e
d
i
r
e
c
t
o
r
 
e
x
p
l
o
i
t


 
 
 
 
/
/
$
v
a
l
=
s
t
r
_
i
r
e
p
l
a
c
e
(
$
v
i
n
c
e
s
,
"
<
x
>
"
,
$
v
a
l
)
;

 
 
 
 
$
v
a
l
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
a
r
r
a
y
(
"
\
r
"
,
 
"
\
t
"
,
 
"
\
n
"
)
,
 
'
'
,
 
$
v
a
l
)
;

 
 
 
 
/
/
 
e
n
d
 
v
i
n
c
e
s


 
 
 
 
/
/
 
s
t
r
a
i
g
h
t
 
r
e
p
l
a
c
e
m
e
n
t
s
,
 
t
h
e
 
u
s
e
r
 
s
h
o
u
l
d
 
n
e
v
e
r
 
n
e
e
d
 
t
h
e
s
e
 
s
i
n
c
e
 
t
h
e
y
'
r
e
 
n
o
r
m
a
l
 
c
h
a
r
a
c
t
e
r
s

 
 
 
 
/
/
 
t
h
i
s
 
p
r
e
v
e
n
t
s
 
l
i
k
e
 
<
I
M
G
 
S
R
C
=
&
#
X
4
0
&
#
X
6
1
&
#
X
7
6
&
#
X
6
1
&
#
X
7
3
&
#
X
6
3
&
#
X
7
2
&
#
X
6
9
&
#
X
7
0
&
#
X
7
4
&
#
X
3
A
&
#
X
6
1
&
#
X
6
C
&
#
X
6
5
&
#
X
7
2
&
#
X
7
4
&
#
X
2
8
&
#
X
2
7
&
#
X
5
8
&
#
X
5
3
&
#
X
5
3
&
#
X
2
7
&
#
X
2
9
>

 
 
 
 
$
s
e
a
r
c
h
 
=
 
'
a
b
c
d
e
f
g
h
i
j
k
l
m
n
o
p
q
r
s
t
u
v
w
x
y
z
'
;

 
 
 
 
$
s
e
a
r
c
h
 
.
=
 
'
A
B
C
D
E
F
G
H
I
J
K
L
M
N
O
P
Q
R
S
T
U
V
W
X
Y
Z
'
;

 
 
 
 
$
s
e
a
r
c
h
 
.
=
 
'
1
2
3
4
5
6
7
8
9
0
!
@
#
$
%
^
&
*
(
)
'
;

 
 
 
 
$
s
e
a
r
c
h
 
.
=
 
'
~
`
"
;
:
?
+
/
=
{
}
[
]
-
_
|
\
'
\
\
'
;

 
 
 
 
$
l
e
n
s
e
a
r
c
h
 
=
 
s
t
r
l
e
n
(
$
s
e
a
r
c
h
)
;

 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
l
e
n
s
e
a
r
c
h
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
/
/
 
;
?
 
m
a
t
c
h
e
s
 
t
h
e
 
;
,
 
w
h
i
c
h
 
i
s
 
o
p
t
i
o
n
a
l

 
 
 
 
 
 
 
 
/
/
 
0
{
0
,
7
}
 
m
a
t
c
h
e
s
 
a
n
y
 
p
a
d
d
e
d
 
z
e
r
o
s
,
 
w
h
i
c
h
 
a
r
e
 
o
p
t
i
o
n
a
l
 
a
n
d
 
g
o
 
u
p
 
t
o
 
8
 
c
h
a
r
s


 
 
 
 
 
 
 
 
/
/
 
&
#
x
0
0
4
0
 
@
 
s
e
a
r
c
h
 
f
o
r
 
t
h
e
 
h
e
x
 
v
a
l
u
e
s

 
 
 
 
 
 
 
 
$
v
a
l
 
=
 
p
r
e
g
_
r
e
p
l
a
c
e
(
'
/
(
&
#
[
x
|
X
]
0
{
0
,
8
}
'
.
d
e
c
h
e
x
(
o
r
d
(
$
s
e
a
r
c
h
[
 
$
i
 
]
)
)
.
'
;
?
)
/
i
'
,
 
$
s
e
a
r
c
h
[
 
$
i
 
]
,
 
$
v
a
l
)
;
 
/
/
 
w
i
t
h
 
a
 
;

 
 
 
 
 
 
 
 
/
/
 
&
#
0
0
0
6
4
 
@
 
0
{
0
,
7
}
 
m
a
t
c
h
e
s
 
'
0
'
 
z
e
r
o
 
t
o
 
s
e
v
e
n
 
t
i
m
e
s

 
 
 
 
 
 
 
 
$
v
a
l
 
=
 
p
r
e
g
_
r
e
p
l
a
c
e
(
'
/
(
&
#
0
{
0
,
8
}
'
.
o
r
d
(
$
s
e
a
r
c
h
[
 
$
i
 
]
)
.
'
;
?
)
/
'
,
 
$
s
e
a
r
c
h
[
 
$
i
 
]
,
 
$
v
a
l
)
;
 
/
/
 
w
i
t
h
 
a
 
;

 
 
 
 
}


 
 
 
 
/
/
 
n
o
w
 
t
h
e
 
o
n
l
y
 
r
e
m
a
i
n
i
n
g
 
w
h
i
t
e
s
p
a
c
e
 
a
t
t
a
c
k
s
 
a
r
e
 
\
t
,
 
\
n
,
 
a
n
d
 
\
r


 
 
 
 
$
r
a
 
=
 
a
r
r
a
y
_
m
e
r
g
e
(
$
r
a
1
,
 
$
r
a
2
)
;

 
 
 
 
$
f
o
u
n
d
 
=
 
f
a
l
s
e
;
 
/
/
 
k
e
e
p
 
r
e
p
l
a
c
i
n
g
 
a
s
 
l
o
n
g
 
a
s
 
t
h
e
 
p
r
e
v
i
o
u
s
 
r
o
u
n
d
 
r
e
p
l
a
c
e
d
 
s
o
m
e
t
h
i
n
g
 
/
/
 
C
u
r
r
e
n
t
l
y
 
d
i
s
a
b
l
e
d
 
d
u
e
 
t
o
 
i
t
 
r
e
p
l
a
c
i
n
g
 
t
o
o
 
m
a
n
y
 
t
h
i
n
g
s
 
o
f
 
v
a
l
u
e
.
 
J
o
o
m
l
a
 
i
g
n
o
r
e
s
 
t
h
i
n
g
s
 
l
i
k
e
 
<
s
c
r
i
p
t
>
,
 
p
r
o
b
a
b
l
y
 
f
o
r
 
t
h
e
 
s
a
m
e
 
r
e
a
s
o
n
s
,
 
w
e
'
r
e
 
g
o
i
n
g
 
t
o
 
n
e
e
d
 
t
o
 
d
o
 
t
h
e
 
s
a
m
e
 
t
h
i
n
g
 
t
o
o
 
o
t
h
e
r
w
i
s
e
 
t
h
e
 
s
y
s
t
e
m
 
i
s
 
u
n
u
s
a
b
l
e
.
 
E
g
.
 
y
o
u
 
c
a
n
'
t
 
h
a
v
e
 
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
 
B
a
s
e
l
 
b
e
c
a
u
s
e
 
B
a
s
e
l
 
g
e
t
s
 
r
e
p
l
a
c
e
d
 
w
i
t
h
 
B
a
<
x
>
s
e
.

 
 
 
 
w
h
i
l
e
 
(
$
f
o
u
n
d
 
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
$
v
a
l
_
b
e
f
o
r
e
 
=
 
$
v
a
l
;

 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
s
i
z
e
o
f
(
$
r
a
)
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
t
e
r
n
 
=
 
'
/
'
;

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
j
 
=
 
0
;
 
$
j
 
<
 
s
t
r
l
e
n
(
$
r
a
[
 
$
i
 
]
)
;
 
+
+
$
j
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
j
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
t
e
r
n
 
.
=
 
'
(
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
t
e
r
n
 
.
=
 
'
(
&
#
[
x
|
X
]
0
{
0
,
8
}
(
[
9
]
[
a
]
[
b
]
)
;
?
)
?
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
t
e
r
n
 
.
=
 
'
|
(
&
#
0
{
0
,
8
}
(
[
9
]
[
1
0
]
[
1
3
]
)
;
?
)
?
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
t
e
r
n
 
.
=
 
'
)
?
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
t
e
r
n
 
.
=
 
$
r
a
[
 
$
i
 
]
[
 
$
j
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
t
t
e
r
n
 
.
=
 
'
/
i
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
p
l
a
c
e
m
e
n
t
 
=
 
s
u
b
s
t
r
(
$
r
a
[
 
$
i
 
]
,
 
0
,
 
2
)
.
'
<
x
>
'
.
s
u
b
s
t
r
(
$
r
a
[
 
$
i
 
]
,
 
2
)
;
 
/
/
 
a
d
d
 
i
n
 
<
>
 
t
o
 
n
e
r
f
 
t
h
e
 
t
a
g

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
 
=
 
p
r
e
g
_
r
e
p
l
a
c
e
(
$
p
a
t
t
e
r
n
,
 
$
r
e
p
l
a
c
e
m
e
n
t
,
 
$
v
a
l
)
;
 
/
/
 
f
i
l
t
e
r
 
o
u
t
 
t
h
e
 
h
e
x
 
t
a
g
s

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
l
_
b
e
f
o
r
e
 
=
=
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
n
o
 
r
e
p
l
a
c
e
m
e
n
t
s
 
w
e
r
e
 
m
a
d
e
,
 
s
o
 
e
x
i
t
 
t
h
e
 
l
o
o
p

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
o
u
n
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
v
a
l
;

}


f
u
n
c
t
i
o
n
 
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
r
e
q
u
e
s
t
,
 
$
e
l
e
m
e
n
t
,
 
$
d
e
f
 
=
 
n
u
l
l
,
 
$
m
a
s
k
 
=
 
'
'
)
 
/
/
 
v
a
r
i
a
b
l
e
 
t
y
p
e
 
n
o
t
 
u
s
e
d
,
 
w
e
'
l
l
 
c
a
s
t
 
t
h
e
 
v
a
r
i
a
b
l
e
 
t
y
p
e
 
d
e
p
e
n
d
i
n
g
 
o
n
 
t
h
e
 
d
e
f
a
u
l
t
 
(
$
d
e
f
)
 
t
h
a
t
'
s
 
p
a
s
s
e
d
 
t
o
 
t
h
e
 
f
u
n
c
t
i
o
n

{

 
 
 
 
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
e
n
a
b
l
e
_
i
n
p
u
t
_
c
a
c
h
e
 
=
 
t
r
u
e
;


 
 
 
 
i
f
 
(
$
e
n
a
b
l
e
_
i
n
p
u
t
_
c
a
c
h
e
)
 
{

 
 
 
 
 
 
 
 
$
p
u
r
i
f
i
e
d
_
i
n
p
u
t
s
_
c
a
c
h
e
 
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
p
u
r
i
f
i
e
d
_
i
n
p
u
t
s
_
c
a
c
h
e
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
p
u
r
i
f
i
e
d
_
i
n
p
u
t
s
_
c
a
c
h
e
-
>
i
s
_
c
a
c
h
e
d
(
$
r
e
q
u
e
s
t
,
 
$
e
l
e
m
e
n
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
p
u
r
i
f
i
e
d
_
i
n
p
u
t
s
_
c
a
c
h
e
-
>
g
e
t
_
c
a
c
h
e
(
$
r
e
q
u
e
s
t
,
 
$
e
l
e
m
e
n
t
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
I
f
 
t
h
e
 
a
r
r
a
y
 
e
l
e
m
e
n
t
 
i
s
 
s
e
t
,
 
w
e
'
l
l
 
s
e
t
 
$
d
i
r
t
y
 
t
o
 
t
h
a
t
,
 
o
t
h
e
r
w
i
s
e
 
w
e
'
l
l
 
s
i
m
p
l
y
 
r
e
t
u
r
n
 
t
h
e
 
d
e
f
a
u
l
t

 
 
 
 
/
/
 
i
f
 
S
E
F
 
e
n
a
b
l
e
d
 
i
n
 
j
o
o
m
l
a
,
 
w
e
 
n
e
e
d
 
t
o
 
g
e
t
 
t
h
e
 
v
a
r
s
 
f
r
o
m
 
j
i
n
p
u
t


 
 
 
 
/
/
v
a
r
s
 
t
h
a
t
 
w
e
`
v
e
 
m
a
d
e
 
S
E
F
 
i
n
 
r
o
u
t
e
r
.
p
h
p
 
a
n
d
 
a
r
e
 
n
o
t
 
a
v
a
i
l
a
b
l
e
 
i
n
 
$
_
R
E
Q
U
E
S
T
 
a
n
y
m
o
r
e

 
 
 
 
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
R
E
Q
U
E
S
T
[
 
'
c
a
l
l
e
d
B
y
M
o
d
u
l
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
s
e
f
_
v
a
r
s
 
=
 
a
r
r
a
y
(
'
t
a
s
k
'
,
 
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
 
'
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
'
,
 
'
t
o
w
n
'
,
 
'
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
o
u
n
t
r
y
'
,
 
'
c
a
l
l
e
d
B
y
M
o
d
u
l
e
'
,
 
'
s
e
n
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
s
e
f
_
v
a
r
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

 
 
 
 
}


 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
r
e
w
e
i
n
a
d
m
i
n
a
r
e
a
(
)
 
&
&
 
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
 
&
&
 
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
s
e
f
'
)
 
=
=
 
'
1
'
 
&
&
 
!
A
J
A
X
C
A
L
L
 
&
&
 
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
 
&
&
 
i
n
_
a
r
r
a
y
(
$
e
l
e
m
e
n
t
,
 
$
s
e
f
_
v
a
r
s
)
)
 
{

 
 
 
 
 
 
 
 
$
j
i
n
p
u
t
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
A
p
p
l
i
c
a
t
i
o
n
(
)
-
>
i
n
p
u
t
;

 
 
 
 
 
 
 
 
$
d
i
r
t
y
 
=
 
$
j
i
n
p
u
t
-
>
g
e
t
(
$
e
l
e
m
e
n
t
,
 
$
d
e
f
,
 
'
S
T
R
I
N
G
'
)
;

 
 
 
 
}
 
e
l
s
e
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
r
e
q
u
e
s
t
[
 
$
e
l
e
m
e
n
t
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
d
i
r
t
y
 
=
 
$
r
e
q
u
e
s
t
[
 
$
e
l
e
m
e
n
t
 
]
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
d
e
f
;

 
 
 
 
}


 
 
 
 
/
/
 
W
e
'
l
l
 
d
i
s
c
o
v
e
r
 
t
h
e
 
t
y
p
e
 
o
f
 
$
d
i
r
t
y
,
 
s
o
 
t
h
a
t
 
w
e
 
c
a
n
 
c
a
s
t
 
t
h
e
 
v
a
r
i
a
b
l
e
 
t
o
 
a
 
g
i
v
e
n
 
t
y
p
e

 
 
 
 
$
t
y
p
e
 
=
 
j
o
m
r
e
s
_
g
e
t
_
v
a
r
_
t
y
p
e
(
$
d
e
f
)
;


 
 
 
 
i
f
 
(
!
$
t
y
p
e
)
 
{
 
/
/
 
I
f
 
t
h
e
 
d
a
t
a
 
p
a
s
s
e
d
 
i
s
n
'
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
,
 
w
e
'
l
l
 
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
 
o
u
t
,
 
p
a
s
s
i
n
g
 
a
 
n
i
c
e
 
s
a
f
e
 
n
u
l
l
 
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
 
c
a
n
 
w
o
r
k
 
w
i
t
h
.

 
 
 
 
 
 
 
 
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


 
 
 
 
/
/
 
M
o
s
t
l
y
 
w
e
'
l
l
 
u
s
e
 
t
y
p
e
 
c
a
s
t
i
n
g
 
t
o
 
c
l
e
a
n
 
t
h
e
 
p
a
s
s
e
d
 
d
a
t
a
.
 
A
r
r
a
y
 
A
L
W
A
Y
S
 
a
s
s
u
m
e
s
 
t
h
a
t
 
t
h
e
 
a
r
r
a
y
 
p
a
s
s
e
d
 
i
s
 
a
n
 
a
r
r
a
y
 
o
f
 
i
n
t
e
g
e
r
s
,

 
 
 
 
/
/
 
i
f
 
y
o
u
 
w
a
n
t
 
t
o
 
u
s
e
 
a
n
o
t
h
e
r
 
t
y
p
e
 
o
f
 
a
r
r
a
y
 
y
o
u
'
l
l
 
n
e
e
d
 
t
o
 
c
l
e
a
n
 
t
h
a
t
 
u
p
 
y
o
u
s
e
l
f
.

 
 
 
 
/
/
 
T
h
e
 
m
a
i
n
 
r
e
a
s
o
n
 
f
o
r
 
u
s
i
n
g
 
c
a
s
t
i
n
g
 
i
s
 
1
.
 
i
t
'
s
 
v
e
r
y
 
e
f
f
e
c
t
i
v
e
 
a
n
d
 
2
.
 
i
t
 
s
t
o
p
s
 
u
s
 
n
e
e
d
i
n
g
 
t
o
 
u
s
e
 
t
h
e
 
h
t
m
l
 
p
u
r
i
f
i
e
r
,
 
w
h
i
c
h
 
i
s
 
c
p
u
 
i
n
t
e
n
s
i
v
e
.


 
 
 
 
s
w
i
t
c
h
 
(
$
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
f
l
o
a
t
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
 
=
 
(
f
l
o
a
t
)
 
$
d
i
r
t
y
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
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
 
=
 
(
i
n
t
)
 
$
d
i
r
t
y
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
b
o
o
l
e
a
n
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
 
=
 
(
b
o
o
l
)
 
$
d
i
r
t
y
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
n
u
l
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
 
=
 
n
u
l
l
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
a
r
r
a
y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
 
=
 
(
a
r
r
a
y
)
 
$
d
i
r
t
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
 
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
t
m
p
 
a
s
 
$
k
e
y
1
 
=
>
 
$
v
a
l
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
a
r
r
a
y
(
$
k
e
y
1
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
k
e
y
1
 
a
s
 
$
k
e
y
2
 
=
>
 
$
v
a
l
2
)
 
{
 
/
/
 
i
f
 
t
h
e
 
f
i
e
l
d
 
v
a
l
u
e
 
i
s
 
a
n
 
a
r
r
a
y
,
 
s
t
e
p
 
t
h
r
o
u
g
h
 
i
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
k
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
k
e
y
2
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
v
a
l
2
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
[
 
$
k
 
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
k
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
k
e
y
1
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
v
a
l
1
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
[
 
$
k
 
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
 
/
/
 
t
r
e
a
t
 
e
v
e
r
y
t
h
i
n
g
 
e
l
s
e
 
a
s
 
a
 
s
t
r
i
n
g
.

 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
o
w
e
d
_
i
n
p
u
t
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
i
n
p
u
t
s
_
a
l
l
o
w
i
n
g
_
h
t
m
l
'
)
;


	
	
	
i
f
 
(
!
i
s
_
a
r
r
a
y
(
$
a
l
l
o
w
e
d
_
i
n
p
u
t
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
o
w
e
d
_
i
n
p
u
t
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

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
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
i
n
p
u
t
_
f
i
l
t
e
r
i
n
g
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
i
n
p
u
t
_
f
i
l
t
e
r
i
n
g
'
 
]
 
=
 
'
s
t
r
o
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
r
t
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
d
i
r
t
y
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
$
e
l
e
m
e
n
t
,
 
$
a
l
l
o
w
e
d
_
i
n
p
u
t
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
i
n
p
u
t
_
f
i
l
t
e
r
i
n
g
'
 
]
 
!
=
 
'
w
e
a
k
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
 
=
 
j
o
m
r
e
s
_
p
u
r
i
f
y
_
h
t
m
l
(
$
d
i
r
t
y
 
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
&
#
3
9
;
;
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
&
#
3
4
;
;
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
J
z
s
=
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
I
j
s
=
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
&
q
u
o
t
;
;
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
E
M
B
E
D
 
S
R
C
'
)
)
 
{
 
/
/
 
'
;
 
"
;
 
'
;
 
(
b
a
s
e
6
4
)
 
"
;
 
(
b
a
s
e
6
4
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
,
 
i
l
l
e
g
a
l
 
u
s
e
 
o
f
 
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
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
'
"
,
 
'
&
#
1
8
0
;
'
,
 
$
d
i
r
t
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
&
#
3
9
;
;
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
&
#
3
4
;
;
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
J
z
s
=
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
I
j
s
=
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
&
q
u
o
t
;
;
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
E
M
B
E
D
 
S
R
C
'
)
)
 
{
 
/
/
 
'
;
 
"
;
 
'
;
 
(
b
a
s
e
6
4
)
 
"
;
 
(
b
a
s
e
6
4
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
,
 
i
l
l
e
g
a
l
 
u
s
e
 
o
f
 
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
'
)
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
c
l
e
a
n
 
=
 
j
o
m
r
e
s
_
s
a
n
i
t
i
s
e
_
s
t
r
i
n
g
(
$
d
i
r
t
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
&
#
3
9
;
;
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
&
#
3
4
;
;
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
J
z
s
=
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
I
j
s
=
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
&
q
u
o
t
;
;
'
)
 
|
|
 
s
t
r
s
t
r
(
$
c
l
e
a
n
,
 
'
E
M
B
E
D
 
S
R
C
'
)
)
 
{
 
/
/
 
'
;
 
"
;
 
'
;
 
(
b
a
s
e
6
4
)
 
"
;
 
(
b
a
s
e
6
4
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
,
 
i
l
l
e
g
a
l
 
u
s
e
 
o
f
 
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
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}

 
 
 
 
i
f
 
(
$
e
n
a
b
l
e
_
i
n
p
u
t
_
c
a
c
h
e
)
 
{

 
 
 
 
 
 
 
 
$
p
u
r
i
f
i
e
d
_
i
n
p
u
t
s
_
c
a
c
h
e
-
>
s
e
t
_
c
a
c
h
e
(
$
r
e
q
u
e
s
t
,
 
$
e
l
e
m
e
n
t
,
 
$
c
l
e
a
n
)
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
l
e
a
n
;

}


f
u
n
c
t
i
o
n
 
j
o
m
r
e
s
_
s
a
n
i
t
i
s
e
_
s
t
r
i
n
g
(
$
d
i
r
t
y
)

{

 
 
 
 
i
f
 
(
$
d
i
r
t
y
 
=
=
 
'
'
)
 
{
 
/
/
 
N
o
 
n
e
e
d
 
t
o
 
c
a
l
l
 
p
u
r
i
f
i
e
r
 
i
f
 
t
h
e
r
e
'
s
 
n
o
t
i
n
g
 
t
o
 
p
u
r
i
f
y

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
'
;

 
 
 
 
}


 
 
 
 
/
/
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
'
H
T
M
L
 
p
u
r
i
f
i
e
r
 
c
a
l
l
e
d
 
f
o
r
 
s
t
r
i
n
g
 
'
.
$
d
i
r
t
y
,
 
'
C
o
r
e
'
,
 
'
D
E
B
U
G
'
)
;

 
 
 
 
$
h
t
m
l
_
p
u
r
i
f
i
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
i
n
p
u
t
_
f
i
l
t
e
r
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
d
i
r
t
y
 
=
 
j
o
m
r
e
s
_
r
e
m
o
v
e
_
H
T
M
L
(
$
d
i
r
t
y
)
;
 
/
/
 
S
t
r
i
p
 
o
u
t
 
a
n
y
 
h
t
m
l

 
 
 
 
$
d
i
r
t
y
 
=
 
$
h
t
m
l
_
p
u
r
i
f
i
e
r
-
>
p
u
r
i
f
y
(
$
d
i
r
t
y
)
;

 
 
 
 
$
d
i
r
t
y
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
&
a
m
p
;
'
,
 
'
&
'
,
 
$
d
i
r
t
y
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
 
a
m
p
e
r
s
a
n
d
s
 
w
i
l
l
 
b
e
 
d
o
u
b
l
e
 
e
n
c
o
d
e
d

 
 
 
 
$
c
l
e
a
n
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
d
i
r
t
y
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
$
c
l
e
a
n
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
&
#
1
3
;
&
#
1
0
;
"
 
,
 
"
\
n
"
 
,
 
$
c
l
e
a
n
)
;
 
/
/
 
T
h
i
s
 
a
l
l
o
w
s
 
u
s
 
t
o
 
s
a
f
e
l
y
 
r
e
s
t
o
r
e
 
l
i
n
e
b
r
e
a
k
s

 
 
 
 
r
e
t
u
r
n
 
$
c
l
e
a
n
;

}


f
u
n
c
t
i
o
n
 
j
o
m
r
e
s
_
p
u
r
i
f
y
_
h
t
m
l
(
$
d
i
r
t
y
)

{

 
 
 
 
/
/
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
'
H
T
M
L
 
p
u
r
i
f
i
e
r
 
c
a
l
l
e
d
'
,
 
'
C
o
r
e
'
,
 
'
D
E
B
U
G
'
)
;

 
 
 
 
$
h
t
m
l
_
p
u
r
i
f
i
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
i
n
p
u
t
_
f
i
l
t
e
r
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
d
i
r
t
y
 
=
 
$
h
t
m
l
_
p
u
r
i
f
i
e
r
-
>
p
u
r
i
f
y
(
$
d
i
r
t
y
,
 
$
a
l
l
o
w
_
h
t
m
l
 
=
 
t
r
u
e
)
;

 
 
 
 

 
 
 
 
$
d
i
r
t
y
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
&
a
m
p
;
'
,
 
'
&
'
,
 
$
d
i
r
t
y
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
 
a
m
p
e
r
s
a
n
d
s
 
w
i
l
l
 
b
e
 
d
o
u
b
l
e
 
e
n
c
o
d
e
d

 
 
 
 
$
c
l
e
a
n
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
d
i
r
t
y
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
$
c
l
e
a
n
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
&
#
1
3
;
&
#
1
0
;
"
 
,
 
"
\
n
"
 
,
 
$
c
l
e
a
n
)
;
 
/
/
 
T
h
i
s
 
a
l
l
o
w
s
 
u
s
 
t
o
 
s
a
f
e
l
y
 
r
e
s
t
o
r
e
 
l
i
n
e
b
r
e
a
k
s

 
 
 
 
r
e
t
u
r
n
 
$
c
l
e
a
n
;

}


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
E
s
c
a
p
e
d
(
$
t
e
x
t
)

{

 
 
 
 
$
t
e
x
t
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
'
"
,
 
'
&
#
3
9
;
'
,
 
$
t
e
x
t
)
;


 
 
 
 
r
e
t
u
r
n
 
f
i
l
t
e
r
_
v
a
r
(
$
t
e
x
t
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

}


/
/
 
h
t
t
p
:
/
/
w
w
w
.
p
h
p
.
n
e
t
/
m
a
n
u
a
l
/
e
n
/
f
u
n
c
t
i
o
n
.
s
t
r
i
p
-
t
a
g
s
.
p
h
p
#
9
7
3
8
6

/
/
 
L
i
k
e
 
m
a
n
y
 
o
t
h
e
r
 
f
u
n
c
t
i
o
n
s
 
i
n
 
J
o
m
r
e
s
,
 
i
t
 
h
a
s
 
b
e
e
n
 
r
e
n
a
m
e
d
 
t
o
 
j
o
m
r
e
s
_
 
b
e
c
o
m
e
s
 
i
t
'
s
 
n
o
t
 
u
n
u
s
u
a
l
 
f
o
r
 
o
t
h
e
r
 
s
o
f
t
w
a
r
e
 
d
e
v
e
l
o
p
e
r
s
 
t
o
 
u
s
e
 
t
h
e
 
s
a
m
e
 
f
u
n
c
t
i
o
n
s
 
i
n
 
t
h
e
i
r
 
l
i
b
r
a
r
i
e
s
.
 
R
e
n
a
m
i
n
g
 
t
h
e
 
f
u
n
c
t
i
o
n
 
t
h
u
s
 
p
r
e
v
e
n
t
s
 
p
h
p
 
f
r
o
m
 
t
h
r
o
w
i
n
g
 
d
u
p
l
i
c
a
t
e
 
f
u
n
c
t
i
o
n
 
n
a
m
e
 
e
r
r
o
r
s

f
u
n
c
t
i
o
n
 
j
o
m
r
e
s
_
r
e
m
o
v
e
_
H
T
M
L
(
$
s
,
 
$
k
e
e
p
 
=
 
'
p
|
b
r
'
,
 
$
e
x
p
a
n
d
 
=
 
'
s
c
r
i
p
t
|
s
t
y
l
e
|
n
o
f
r
a
m
e
s
|
s
e
l
e
c
t
|
o
p
t
i
o
n
'
)

{

 
 
 
 
/
/
p
r
e
p
 
t
h
e
 
s
t
r
i
n
g

 
 
 
 
$
s
 
=
 
'
 
'
.
$
s
;

 
 
 
 

 
 
 
 
$
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
 
(
 
a
r
r
a
y
(
"
<
b
r
 
/
>
"
 
,
 
"
<
b
r
/
>
"
)
 
,
 
"
\
n
"
 
,
 
$
s
)
;

 
 
 
 

 
 
 
 
 
/
/
i
n
i
t
i
a
l
i
z
e
 
k
e
e
p
 
t
a
g
 
l
o
g
i
c

 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
k
e
e
p
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
$
k
 
=
 
e
x
p
l
o
d
e
(
'
|
'
,
 
$
k
e
e
p
)
;

	
	
$
n
 
=
 
c
o
u
n
t
(
$
k
)
;

 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
<
'
.
$
k
[
 
$
i
 
]
,
 
'
[
{
(
'
.
$
k
[
 
$
i
 
]
,
 
$
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
<
/
'
.
$
k
[
 
$
i
 
]
,
 
'
[
{
(
/
'
.
$
k
[
 
$
i
 
]
,
 
$
s
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
b
e
g
i
n
 
r
e
m
o
v
a
l

 
 
 
 
 
/
/
r
e
m
o
v
e
 
c
o
m
m
e
n
t
 
b
l
o
c
k
s

 
 
 
 
w
h
i
l
e
 
(
s
t
r
i
p
o
s
(
$
s
,
 
'
<
!
-
-
'
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
$
p
o
s
[
 
1
 
]
 
=
 
s
t
r
i
p
o
s
(
$
s
,
 
'
<
!
-
-
'
)
;

 
 
 
 
 
 
 
 
$
p
o
s
[
 
2
 
]
 
=
 
s
t
r
i
p
o
s
(
$
s
,
 
'
-
-
>
'
,
 
$
p
o
s
[
 
1
 
]
)
;

 
 
 
 
 
 
 
 
$
l
e
n
[
 
1
 
]
 
=
 
$
p
o
s
[
 
2
 
]
 
-
 
$
p
o
s
[
 
1
 
]
 
+
 
3
;

 
 
 
 
 
 
 
 
$
x
 
=
 
s
u
b
s
t
r
(
$
s
,
 
$
p
o
s
[
 
1
 
]
,
 
$
l
e
n
[
 
1
 
]
)
;

 
 
 
 
 
 
 
 
$
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
x
,
 
'
'
,
 
$
s
)
;

 
 
 
 
}


 
 
 
 
 
/
/
r
e
m
o
v
e
 
t
a
g
s
 
w
i
t
h
 
c
o
n
t
e
n
t
 
b
e
t
w
e
e
n
 
t
h
e
m

 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
e
x
p
a
n
d
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
$
e
 
=
 
e
x
p
l
o
d
e
(
'
|
'
,
 
$
e
x
p
a
n
d
)
;

	
	
$
n
 
=
 
c
o
u
n
t
(
$
e
)
;

 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
s
t
r
i
p
o
s
(
$
s
,
 
'
<
'
.
$
e
[
 
$
i
 
]
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
e
n
[
 
1
 
]
 
=
 
s
t
r
l
e
n
(
'
<
'
.
$
e
[
 
$
i
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
[
 
1
 
]
 
=
 
s
t
r
i
p
o
s
(
$
s
,
 
'
<
'
.
$
e
[
 
$
i
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
[
 
2
 
]
 
=
 
s
t
r
i
p
o
s
(
$
s
,
 
$
e
[
 
$
i
 
]
.
'
>
'
,
 
$
p
o
s
[
 
1
 
]
 
+
 
$
l
e
n
[
 
1
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
e
n
[
 
2
 
]
 
=
 
$
p
o
s
[
 
2
 
]
 
-
 
$
p
o
s
[
 
1
 
]
 
+
 
$
l
e
n
[
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
x
 
=
 
s
u
b
s
t
r
(
$
s
,
 
$
p
o
s
[
 
1
 
]
,
 
$
l
e
n
[
 
2
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
x
,
 
'
'
,
 
$
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
 
/
/
r
e
m
o
v
e
 
r
e
m
a
i
n
i
n
g
 
t
a
g
s

 
 
 
 
w
h
i
l
e
 
(
s
t
r
i
p
o
s
(
$
s
,
 
'
<
'
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
$
p
o
s
[
 
1
 
]
 
=
 
s
t
r
i
p
o
s
(
$
s
,
 
'
<
'
)
;

 
 
 
 
 
 
 
 
$
p
o
s
[
 
2
 
]
 
=
 
s
t
r
i
p
o
s
(
$
s
,
 
'
>
'
,
 
$
p
o
s
[
 
1
 
]
)
;

 
 
 
 
 
 
 
 
$
l
e
n
[
 
1
 
]
 
=
 
$
p
o
s
[
 
2
 
]
 
-
 
$
p
o
s
[
 
1
 
]
 
+
 
1
;

 
 
 
 
 
 
 
 
$
x
 
=
 
s
u
b
s
t
r
(
$
s
,
 
$
p
o
s
[
 
1
 
]
,
 
$
l
e
n
[
 
1
 
]
)
;

 
 
 
 
 
 
 
 
$
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
x
,
 
'
'
,
 
$
s
)
;

 
 
 
 
}


 
 
 
 
 
/
/
f
i
n
a
l
i
z
e
 
k
e
e
p
 
t
a
g

 
 
 
 
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
k
)
)
 
{

	
	
$
n
 
=
 
c
o
u
n
t
(
$
k
)
;

 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
[
{
(
'
.
$
k
[
 
$
i
 
]
,
 
'
<
'
.
$
k
[
 
$
i
 
]
,
 
$
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
[
{
(
/
'
.
$
k
[
 
$
i
 
]
,
 
'
<
/
'
.
$
k
[
 
$
i
 
]
,
 
$
s
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
 
 
 
 

 
 
 
 
r
e
t
u
r
n
 
t
r
i
m
(
$
s
)
;

}


/
*
*

 
*
 
@
r
e
t
u
r
n

 
*

 
*
 
@
p
a
r
a
m
 
s
t
r
i
n
g

 
*
 
@
p
a
r
a
m
 
a
r
r
a
y

 
*
 
@
p
a
r
a
m
 
b
o
o
l

 
*
 
@
d
e
s
c
 
F
u
n
c
t
i
o
n
 
s
t
r
i
p
_
t
a
g
s
_
e
x
c
e
p
t
(
)
 
w
o
r
k
s
 
s
i
m
i
l
a
r
l
y
 
t
o
 
s
t
r
i
p
_
s
e
l
e
c
t
e
d
_
t
a
g
s
(
)
 
f
u
n
c
t
i
o
n
 
b
u
t
 
i
n
s
t
e
a
d
 
o
f
 
a
l
l
o
w
i
n
g
 
t
h
e
 
u
s
e
r
 
t
o
 
s
p
e
c
i
f
y
 
t
h
e
 
t
a
g
s
 
t
o
 
s
t
r
i
p
,
 
s
h
e
 
c
a
n
 
s
p
e
c
i
f
y
 
t
h
e
 
t
a
g
s
 
t
o
 
a
l
l
o
w
 
a
n
d
 
s
t
r
i
p
 
a
l
l
 
o
t
h
e
r
s
.
 
T
h
e
 
t
h
i
r
d
 
p
a
r
a
m
e
t
e
r
,
 
$
s
t
r
i
p
,
 
w
h
e
n
 
T
R
U
E
 
r
e
m
o
v
e
s
 
"
<
"
 
a
n
d
 
"
>
"
 
f
r
o
m
 
t
h
e
 
s
t
r
i
n
g
 
a
n
d
 
w
h
e
n
 
F
A
L
S
E
 
c
o
n
v
e
r
t
s
 
t
h
e
m
 
t
o
 
"
&
l
t
;
"
 
a
n
d
 
"
&
g
t
;
"
 
r
e
s
p
e
c
t
i
v
e
l
y
.

 
*
/

/
/
 
h
t
t
p
:
/
/
u
k
2
.
p
h
p
.
n
e
t
/
m
a
n
u
a
l
/
e
n
/
f
u
n
c
t
i
o
n
.
s
t
r
i
p
-
t
a
g
s
.
p
h
p
#
7
3
4
3
5

f
u
n
c
t
i
o
n
 
s
t
r
i
p
_
t
a
g
s
_
e
x
c
e
p
t
(
$
t
e
x
t
,
 
$
s
t
r
i
p
 
=
 
t
r
u
e
)

{

 
 
 
 
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
a
l
l
_
t
a
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
;


 
 
 
 
$
a
l
l
o
w
e
d
T
a
g
s
 
=
 
e
x
p
l
o
d
e
(
'
|
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
l
l
o
w
e
d
T
a
g
s
'
 
]
)
;

 
 
 
 
i
f
 
(
!
i
s
_
a
r
r
a
y
(
$
a
l
l
o
w
e
d
T
a
g
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
 
$
t
e
x
t
;

 
 
 
 
}


 
 
 
 
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
a
l
l
o
w
e
d
T
a
g
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
 
$
t
e
x
t
;

 
 
 
 
}

 
 
 
 
$
o
p
e
n
 
=
 
$
s
t
r
i
p
 
?
 
'
'
 
:
 
'
&
l
t
;
'
;

 
 
 
 
$
c
l
o
s
e
 
=
 
$
s
t
r
i
p
 
?
 
'
'
 
:
 
'
&
g
t
;
'
;


 
 
 
 
p
r
e
g
_
m
a
t
c
h
_
a
l
l
(
'
!
<
\
s
*
(
/
)
?
\
s
*
(
[
a
-
z
A
-
Z
]
+
)
[
^
>
]
*
>
!
'
,
 
$
t
e
x
t
,
 
$
a
l
l
_
t
a
g
s
)
;


 
 
 
 
/
/
$
c
o
m
p
l
e
t
e
_
t
a
g
s
=
$
a
l
l
_
t
a
g
s
[
0
]
;

 
 
 
 
a
r
r
a
y
_
s
h
i
f
t
(
$
a
l
l
_
t
a
g
s
)
;

 
 
 
 
$
s
l
a
s
h
e
s
 
=
 
$
a
l
l
_
t
a
g
s
[
 
0
 
]
;

 
 
 
 
$
a
l
l
_
t
a
g
s
 
=
 
$
a
l
l
_
t
a
g
s
[
 
1
 
]
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
a
l
l
_
t
a
g
s
 
a
s
 
$
i
 
=
>
 
$
t
a
g
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
'
<
'
.
s
t
r
t
o
l
o
w
e
r
(
$
t
a
g
)
.
'
>
'
,
 
$
a
l
l
o
w
e
d
T
a
g
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
o
n
t
i
n
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
e
x
t
 
=
 
p
r
e
g
_
r
e
p
l
a
c
e
(
'
!
<
(
\
s
*
'
.
$
s
l
a
s
h
e
s
[
 
$
i
 
]
.
'
\
s
*
'
.
$
t
a
g
.
'
[
^
>
]
*
)
>
!
'
,
 
$
o
p
e
n
.
'
$
1
'
.
$
c
l
o
s
e
,
 
$
t
e
x
t
)
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
t
e
x
t
;

}


/
/
 
R
e
t
u
r
n
s
 
t
h
e
 
u
t
f
 
s
t
r
i
n
g
 
c
o
r
r
e
s
p
o
n
d
i
n
g
 
t
o
 
t
h
e
 
u
n
i
c
o
d
e
 
v
a
l
u
e
 
(
f
r
o
m
 
p
h
p
.
n
e
t
,
 
c
o
u
r
t
e
s
y
 
-
 
r
o
m
a
n
s
@
v
o
i
d
.
l
v
)

f
u
n
c
t
i
o
n
 
j
o
m
r
e
s
_
c
o
d
e
2
u
t
f
(
$
n
u
m
)

{

 
 
 
 
i
f
 
(
$
n
u
m
 
<
 
1
2
8
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
c
h
r
(
$
n
u
m
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
n
u
m
 
<
 
2
0
4
8
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
c
h
r
(
(
$
n
u
m
 
>
>
 
6
)
 
+
 
1
9
2
)
.
c
h
r
(
(
$
n
u
m
 
&
 
6
3
)
 
+
 
1
2
8
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
n
u
m
 
<
 
6
5
5
3
6
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
c
h
r
(
(
$
n
u
m
 
>
>
 
1
2
)
 
+
 
2
2
4
)
.
c
h
r
(
(
(
$
n
u
m
 
>
>
 
6
)
 
&
 
6
3
)
 
+
 
1
2
8
)
.
c
h
r
(
(
$
n
u
m
 
&
 
6
3
)
 
+
 
1
2
8
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
n
u
m
 
<
 
2
0
9
7
1
5
2
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
c
h
r
(
(
$
n
u
m
 
>
>
 
1
8
)
 
+
 
2
4
0
)
.
c
h
r
(
(
(
$
n
u
m
 
>
>
 
1
2
)
 
&
 
6
3
)
 
+
 
1
2
8
)
.
c
h
r
(
(
(
$
n
u
m
 
>
>
 
6
)
 
&
 
6
3
)
 
+
 
1
2
8
)
.
c
h
r
(
(
$
n
u
m
 
&
 
6
3
)
 
+
 
1
2
8
)
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
'
'
;

}


f
u
n
c
t
i
o
n
 
j
o
m
r
e
s
_
g
e
t
_
v
a
r
_
t
y
p
e
(
$
v
a
r
i
a
b
l
e
)

{

 
 
 
 
i
f
 
(
i
s
_
a
r
r
a
y
(
$
v
a
r
i
a
b
l
e
)
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
a
r
r
a
y
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
i
s
_
b
o
o
l
(
$
v
a
r
i
a
b
l
e
)
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
b
o
o
l
e
a
n
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
i
s
_
f
l
o
a
t
(
$
v
a
r
i
a
b
l
e
)
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
f
l
o
a
t
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
i
s
_
i
n
t
(
$
v
a
r
i
a
b
l
e
)
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
i
n
t
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
i
s
_
s
t
r
i
n
g
(
$
v
a
r
i
a
b
l
e
)
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
'
s
t
r
i
n
g
'
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
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


f
u
n
c
t
i
o
n
 
j
o
m
r
e
s
_
p
a
r
s
e
R
e
q
u
e
s
t
(
)
 
/
/
 
A
 
s
i
m
p
l
e
 
r
e
q
u
e
s
t
 
p
a
r
s
e
r
 
t
o
 
c
h
e
c
k
 
t
h
a
t
 
m
o
s
C
o
n
f
.
.
.
.
 
i
s
n
'
t
 
i
n
 
t
h
e
 
r
e
q
u
e
s
t
 
s
t
r
i
n
g
.

{

 
 
 
 
/
/
 
%
6
D
%
6
F
%
7
3
%
4
3
%
6
F
%
6
E
%
6
6
 
=
 
m
o
s
C
o
n
f
 
:
 
u
r
l
e
n
c
o
d
e

 
 
 
 
/
/
 
%
6
D
%
7
2
%
4
3
%
6
F
%
6
E
%
6
6
%
6
9
%
6
7
 
 
m
r
C
o
n
f
i
g
 
h
e
x

 
 
 
 
/
/
%
6
A
%
7
2
%
4
3
%
6
F
%
6
E
%
6
6
%
6
9
%
6
7
 
 
j
r
C
o
n
f
i
g
 
h
e
x

 
 
 
 
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
R
E
Q
U
E
S
T
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
g
e
t
t
y
p
e
(
$
v
a
l
)
 
=
=
 
'
s
t
r
i
n
g
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
_
b
a
s
e
6
4
 
=
 
b
a
s
e
6
4
_
d
e
c
o
d
e
(
$
v
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
k
e
y
,
 
'
p
h
p
:
/
/
'
)
 
|
|
 
s
t
r
s
t
r
(
$
v
a
l
,
 
'
p
h
p
:
/
/
'
)
 
|
|
 
s
t
r
s
t
r
(
$
e
x
_
b
a
s
e
6
4
,
 
'
p
h
p
:
/
/
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
H
a
c
k
 
a
t
t
e
m
p
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
k
e
y
,
 
'
m
o
s
C
o
n
f
'
)
 
|
|
 
s
t
r
s
t
r
(
$
v
a
l
,
 
'
m
o
s
C
o
n
f
'
)
 
|
|
 
s
t
r
s
t
r
(
$
e
x
_
b
a
s
e
6
4
,
 
'
m
o
s
C
o
n
f
'
)
 
|
|
 
s
t
r
i
s
t
r
(
$
v
a
l
,
 
'
%
6
D
%
6
F
%
7
3
%
4
3
%
6
F
%
6
E
%
6
6
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
H
a
c
k
 
a
t
t
e
m
p
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
k
e
y
,
 
'
m
r
C
o
n
f
i
g
'
)
 
|
|
 
s
t
r
s
t
r
(
$
v
a
l
,
 
'
m
r
C
o
n
f
i
g
'
)
 
|
|
 
s
t
r
s
t
r
(
$
e
x
_
b
a
s
e
6
4
,
 
'
m
r
C
o
n
f
i
g
'
)
 
|
|
 
s
t
r
i
s
t
r
(
$
v
a
l
,
 
'
%
6
D
%
7
2
%
4
3
%
6
F
%
6
E
%
6
6
%
6
9
%
6
7
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
H
a
c
k
 
a
t
t
e
m
p
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
k
e
y
,
 
'
j
r
C
o
n
f
i
g
'
)
 
|
|
 
s
t
r
s
t
r
(
$
v
a
l
,
 
'
j
r
C
o
n
f
i
g
'
)
 
|
|
 
s
t
r
s
t
r
(
$
e
x
_
b
a
s
e
6
4
,
 
'
j
r
C
o
n
f
i
g
'
)
 
|
|
 
s
t
r
i
s
t
r
(
$
v
a
l
,
 
'
%
6
A
%
7
2
%
4
3
%
6
F
%
6
E
%
6
6
%
6
9
%
6
7
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
H
a
c
k
 
a
t
t
e
m
p
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


/
/
 
P
r
e
v
i
o
u
s
l
y
 
w
e
 
j
u
s
t
 
u
s
e
d
 
f
l
o
a
t
s
,
 
h
o
w
e
v
e
r
 
E
u
r
o
p
e
a
n
s
 
c
o
m
m
o
n
l
y
 
u
s
e
 
c
o
m
m
a
s
 
a
s
 
a
 
d
e
c
i
m
a
l
 
s
e
p
e
r
a
t
o
r
 
s
o
 
w
e
'
l
l
 
u
s
e
 
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
 
t
o
 
c
o
n
v
e
r
t
 
e
n
t
e
r
e
d
 
p
r
i
c
e
s
 
t
o
 
n
n
n
.
n
n
 
v
a
l
u
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
 
c
o
n
v
e
r
t
_
e
n
t
e
r
e
d
_
p
r
i
c
e
_
i
n
t
o
_
s
a
f
e
_
f
l
o
a
t
(
$
v
a
l
u
e
)

{

 
 
 
 
$
r
e
s
u
l
t
 
=
 
0
.
0
0
;

 
 
 
 
i
f
 
(
s
t
r
s
t
r
(
$
v
a
l
u
e
,
 
'
,
'
)
)
 
{

 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
.
'
,
 
'
^
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
,
'
,
 
'
.
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
^
'
,
 
'
'
,
 
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
(
f
l
o
a
t
)
 
$
v
a
l
u
e
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
(
f
l
o
a
t
)
 
$
v
a
l
u
e
;

 
 
 
 
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
u
l
t
;

}

